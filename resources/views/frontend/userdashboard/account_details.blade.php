@extends('dashboard')
@section('user')
    <!-- ############################## Page Title ############################## -->
    <div class="page section-header text-center">

        <div class="page-title">

            <div class="wrapper">

                <h1 class="page-width">User Account</h1>

            </div>

        </div>

    </div>
    <!--End Page Title-->



    <div class="container new-page" style="padding-bottom: 1rem;">

        <div class="row">

            <!-- ##############################  Sidebar ##############################  -->
            @include('frontend.body.dashboard_sidebar_menu')
            <!--End Sidebar-->



            <!-- ############################## Main Content ############################## -->
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">

                <div class="column main">

                    <input name="form_key" type="hidden" value="QFwD6mzPVfQVUWtM">

                    <form action="{{ route('user.profile.store') }}" method="post" enctype="multipart/form-data"
                        class="form form-edit-account">
                        @csrf

                        <fieldset class="fieldset info">

                            <legend class="legend"><span>Account Information</span></legend>

                            <div class="field field-name-firstname required">
                                <div class="control">
                                    <label class="label mdl-textfield__label">
                                        <h4><span>User Name</span></h4>
                                    </label>
                                    <input type="text" class="form-control" maxlength="100" name="username"
                                        value="{{ $userData->username }}" readonly>
                                </div>
                            </div><br>


                            <div class="field field-name-lastname required">
                                <div class="control">
                                    <label class="label mdl-textfield__label">
                                        <h4><span>Full Name</span></h4>
                                    </label>
                                    <input type="text" class="form-control" maxlength="100" name="name"
                                        value="{{ $userData->name }}">
                                </div>
                            </div><br>


                            <div class="field email required">
                                <div class="control">
                                    <label class="label mdl-textfield__label">
                                        <h4><span>Email</span></h4>
                                    </label>
                                    <input type="email" class="form-control" autocomplete="email" name="email"
                                        value="{{ $userData->email }}">
                                </div>
                            </div><br>


                            <div class="field field-name-lastname required">
                                <div class="control">
                                    <label class="label mdl-textfield__label">
                                        <h4><span>Phone</span></h4>
                                    </label>
                                    <input type="text" class="form-control" maxlength="100" name="phone"
                                        value="{{ $userData->phone }}">
                                </div>
                            </div><br>


                            <div class="field field-name-lastname required">
                                <div class="control">
                                    <label class="label mdl-textfield__label">
                                        <h4><span>Address</span></h4>
                                    </label>
                                    <input type="text" class="form-control" maxlength="100" name="address"
                                        value="{{ $userData->address }}">
                                </div>
                            </div><br>


                            <div class="field field-name-lastname required">
                                <div class="control">
                                    <label class="label mdl-textfield__label">
                                        <h4><span>User Photo</span></h4>
                                    </label>
                                    <input type="file" id="image" class="form-control" name="photo"
                                        style="border: none;">
                                </div>
                            </div><br>


                            <div class="field field-name-lastname required">
                                <div class="control">
                                    <img id="showImage"
                                        src="{{ !empty($userData->photo) ? url('upload/user_images/' . $userData->photo) : url('upload/no_image.jpg') }}"
                                        alt="User" style="width:100px; height:100px;">
                                </div>
                            </div><br>

                        </fieldset>

                        <br>

                        <div class="actions-toolbar">

                            <div class="primary">
                                <button type="submit" name="submit" class="btn btn-success">
                                    <span style="cursor: pointer;">Save Change</span>
                                </button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>
            <!--End Main Content-->
        </div>

    </div>
@endsection
