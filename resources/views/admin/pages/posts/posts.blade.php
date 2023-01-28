<x-admin-layout>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">All Post </h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">  
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <a href="{{route('addpost')}}">
                                            <i class="zmdi zmdi-plus"></i>add post</button>
                                            </a>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                S. No.
                                                </th>
                                                <th>title</th>
                                         
                                                <th>description</th>
                                                <th>date</th>
                                          
                                               <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($posts as $key=>$post)
                                            <tr class="tr-shadow">
                                                <td>
                                                   {{ $key+1 }}
                                                </td>
                                                <td>{{$post->title}}</td>
                                                <td class="desc">{{$post->content}}</td>
                                                <td>{{$post->created_at}}</td>
                                                <td>
                                                    <span class="status--process">Active</span>
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <a href="{{route('delete_post', ['id' => $post->id])}}"
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
</a>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>

                      
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2023 Swayam ki khoj . All rights reserved . </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-admin-layout>