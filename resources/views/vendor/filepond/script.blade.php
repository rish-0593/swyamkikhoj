<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<script src="https://unpkg.com/filepond-plugin-file-metadata/dist/filepond-plugin-file-metadata.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>

<script>
    let filepondMetaData;

    FilePond.registerPlugin(
        FilePondPluginFileMetadata,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );

    function _initializeFilepond(file = null) {
        let options = {
            credits: false,
            acceptedFileTypes: ['image/*'],
            maxFiles: 1,
            server: {
                process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    const formData = new FormData();
                    formData.append(fieldName, file, file.name);
                    formData.append('model_id', metadata.model_id ?? '');
                    formData.append('model_type', metadata.model_type ?? '');

                    const request = new XMLHttpRequest();
                    request.open('POST', "{{ route('filepond.upload') }}");
                    request.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

                    request.upload.onprogress = (e) => {
                        progress(e.lengthComputable, e.loaded, e.total);
                    };

                    request.onload = function () {
                        if (request.status >= 200 && request.status < 300) {
                            load(request.responseText);
                        } else {
                            error('oh no');
                        }
                    };

                    request.send(formData);

                    return {
                        abort: () => {
                            request.abort();

                            abort();
                        },
                    };
                },
                revert: {
                    url: "{{ route('filepond.revert') }}",
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    withCredentials: false,
                    onload: (response) => response.key,
                    onerror: (response) => response.data,
                    ondata: (formData) => {
                        return formData;
                    },
                },
                restore: "{{ route('filepond.restore') }}?id=",
            },
            labelIdle: 'Upload Sample Files',
            files: file ? [
                    {
                    source: file,
                    options: {
                        type: 'limbo',
                    }
                }
            ] : []
        };

        const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create(inputElement, options);

        return pond;
    }
</script>
