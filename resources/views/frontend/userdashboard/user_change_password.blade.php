@extends('dashboard')
@section('user')
    <!-- ############################## Page Title ############################## -->
    <div class="page section-header text-center">

        <div class="page-title">

            <div class="wrapper">

                <h1 class="page-width">Change Password</h1>

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

                    <form action="{{ route('user.update.password') }}" method="post" class="form form-edit-account">
                        @csrf

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <fieldset class="fieldset info">

                            <div class="field field-name-firstname required">
                                <div class="control">
                                    <label class="label mdl-textfield__label">
                                        <h4><span>Old Password</span></h4>
                                    </label>
                                    <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                        maxlength="100" name="old_password" id="current_password"
                                        placeholder="Old Password">
                                    @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><br>


                            <div class="field field-name-firstname required">
                                <div class="control">
                                    <label class="label mdl-textfield__label">
                                        <h4><span>New Password</span></h4>
                                    </label>
                                    <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                        maxlength="100" name="new_password" id="new_password" placeholder="New Password">
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><br>


                            <div class="field field-name-firstname required">
                                <div class="control">
                                    <label class="label mdl-textfield__label">
                                        <h4><span>Confirm New Password</span></h4>
                                    </label>
                                    <input type="password" class="form-control" maxlength="100"
                                        name="new_password_confirmation" id="new_password_confirmation"
                                        placeholder="Confirm New Password">
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
