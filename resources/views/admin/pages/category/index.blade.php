<x-admin-layout>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Category List </h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle-add="modal">
                                    <i class="zmdi zmdi-plus"></i>Add Category
                                </button>
                            </div>
                        </div>

                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($category as $value)
                                        <tr class="tr-shadow">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->created_at }}</td>
                                            <td>
                                                <span class="status--process">Active</span>
                                            </td>
                                            <td>
                                                <div class="table-data-feature" style="justify-content: flex-start;">
                                                    <button class="item" data-placement="top" title="Edit" data-toggle-edit="modal" data-category-id="{{ $value->id }}">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>

                                                    <a href="{{route('category.delete', ['id' => $value->id])}}">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @empty
                                        <tr class="tr-shadow" style="text-align: center">
                                            <td colspan="5">No Data Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.pages.category.modal')

    <x-slot name="scripts">
        @include('admin.pages.category.script')
    </x-slot>
</x-admin-layout>
