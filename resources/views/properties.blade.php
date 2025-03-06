<x-guest-layout>
    <div class="main-content w-100">
        <div class="main-content-inner wrap-dashboard-content">
            <div class="button-show-hide show-mb">
                <span class="body-1">Show Dashboard</span>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <form>
                        <fieldset class="box-fieldset">
                            <label>
                                Post Status:<span>*</span>
                            </label>
                            <div class="nice-select" tabindex="0"><span class="current">Select</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected">Select</li>
                                    <li data-value="2" class="option">Publish</li>
                                    <li data-value="3" class="option">Pending</li>
                                    <li data-value="3" class="option">Hidden</li>
                                    <li data-value="3" class="option">Sold</li>
                                </ul>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-md-9">
                    <form>
                        <fieldset class="box-fieldset">
                            <label>
                                Search:<span>*</span>
                            </label>
                            <input type="text" class="form-control" placeholder="Search by title">
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="widget-box-2 wd-listing mt-20">
                <h3 class="title">My Properties</h3>
                <div class="wrap-table">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Listing</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($properties as $property)


                                <tr class="file-delete">
                                    <td>
                                        <div class="listing-box">
                                            <div class="images">
                                                <img src="{{ $property->image }}" alt="images">
                                            </div>
                                            <div class="content">
                                                <div class="title"><a href="property-detail-v1.html"
                                                        class="link">{{ $property->title }}</a> </div>
                                                <div class="text-date">Posting date: {{ $property->created_at }}</div>
                                                <div class="text-btn text-color-primary">{{ $property->price }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="status-wrap">
                                            <a href="#" class="btn-status"> {{ $property->type }}</a>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="list-action">
                                            <li><a class="item" href=" {{ route('admin.edit.property' , $property->id) }}">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.2413 2.9915L12.366 1.86616C12.6005 1.63171 12.9184 1.5 13.25 1.5C13.5816 1.5 13.8995 1.63171 14.134 1.86616C14.3685 2.10062 14.5002 2.4186 14.5002 2.75016C14.5002 3.08173 14.3685 3.39971 14.134 3.63416L4.55467 13.2135C4.20222 13.5657 3.76758 13.8246 3.29 13.9668L1.5 14.5002L2.03333 12.7102C2.17552 12.2326 2.43442 11.7979 2.78667 11.4455L11.242 2.9915H11.2413ZM11.2413 2.9915L13 4.75016"
                                                            stroke="#A3ABB0" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    Edit</a>
                                            </li>
                                            <li><a class="item">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.2427 12.2427C13.3679 11.1175 14.0001 9.59135 14.0001 8.00004C14.0001 6.40873 13.3679 4.8826 12.2427 3.75737C11.1175 2.63214 9.59135 2 8.00004 2C6.40873 2 4.8826 2.63214 3.75737 3.75737M12.2427 12.2427C11.1175 13.3679 9.59135 14.0001 8.00004 14.0001C6.40873 14.0001 4.8826 13.3679 3.75737 12.2427C2.63214 11.1175 2 9.59135 2 8.00004C2 6.40873 2.63214 4.8826 3.75737 3.75737M12.2427 12.2427L3.75737 3.75737"
                                                            stroke="#A3ABB0" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                    Sold</a>
                                            </li>
                                            <li><a class="remove-file item " href=" {{ route('admin.delete.property' , $property->id) }}">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568"
                                                            stroke="#A3ABB0" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    Delete</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>


                                @endforeach
                            </tbody>

                        </table>
                    </div>

                    <ul class="wg-pagination ">
                        <li class="arrow">
                            <a href="#"><i class="icon-arrow-left"></i></a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">...</a>
                        </li>
                        <li class="active">
                            <a href="#">20</a>
                        </li>
                        <li class="arrow">
                            <a href="#"><i class="icon-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- .footer-dashboard -->
            <div class="footer-dashboard">
                <p>Copyright © 2024 Popty</p>
                <ul class="list">
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div><!-- .footer-dashboard -->
        </div>
        <div class="overlay-dashboard"></div>


    </div><!-- /.main-content -->


    </div>

    </div>
    <!-- /wrapper -->

    <!-- .login -->
    <div class="modal modal-account fade" id="modalLogin">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="flat-account">
                    <div class="banner-account">
                        <img src="/assets/imagessection/banner-login.jpg" alt="banner">
                    </div>
                    <form class="form-account">
                        <div class="title-box">
                            <h4>Login</h4>
                            <span class="close-modal icon-close" data-bs-dismiss="modal"></span>
                        </div>
                        <div class="box">
                            <fieldset class="box-fieldset">
                                <label for="nameAccount">Account</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4869 14.0435C12.9628 13.3497 12.2848 12.787 11.5063 12.3998C10.7277 12.0126 9.86989 11.8115 9.00038 11.8123C8.13086 11.8115 7.27304 12.0126 6.49449 12.3998C5.71594 12.787 5.03793 13.3497 4.51388 14.0435M13.4869 14.0435C14.5095 13.1339 15.2307 11.9349 15.5563 10.6056C15.8818 9.27625 15.7956 7.87934 15.309 6.60014C14.8224 5.32093 13.9584 4.21986 12.8317 3.44295C11.7049 2.66604 10.3686 2.25 9 2.25C7.63137 2.25 6.29508 2.66604 5.16833 3.44295C4.04158 4.21986 3.17762 5.32093 2.69103 6.60014C2.20443 7.87934 2.11819 9.27625 2.44374 10.6056C2.76929 11.9349 3.49125 13.1339 4.51388 14.0435M13.4869 14.0435C12.2524 15.1447 10.6546 15.7521 9.00038 15.7498C7.3459 15.7523 5.74855 15.1448 4.51388 14.0435M11.2504 7.31228C11.2504 7.90902 11.0133 8.48131 10.5914 8.90327C10.1694 9.32523 9.59711 9.56228 9.00038 9.56228C8.40364 9.56228 7.83134 9.32523 7.40939 8.90327C6.98743 8.48131 6.75038 7.90902 6.75038 7.31228C6.75038 6.71554 6.98743 6.14325 7.40939 5.72129C7.83134 5.29933 8.40364 5.06228 9.00038 5.06228C9.59711 5.06228 10.1694 5.29933 10.5914 5.72129C11.0133 6.14325 11.2504 6.71554 11.2504 7.31228Z"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input type="text" class="form-control" id="nameAccount"
                                        placeholder="Your name">
                                </div>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="pass">Password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input type="text" class="form-control" id="pass"
                                        placeholder="Your password">
                                </div>
                                <div class="text-forgot text-end"><a href="#">Forgot password</a></div>

                            </fieldset>
                        </div>
                        <div class="box box-btn">
                            <a href="dashboard.html" class="tf-btn bg-color-primary w-100">Login</a>
                            <div class="text text-center">Don’t you have an account? <a href="#modalRegister"
                                    data-bs-toggle="modal" class="text-color-primary">Register</a></div>
                        </div>
                        <p class="box text-center caption-2">or login with</p>
                        <div class="group-btn">
                            <a href="#" class="btn-social">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2478_11334)">
                                        <path
                                            d="M4.93242 12.0863L4.23625 14.6852L1.69176 14.739C0.931328 13.3286 0.5 11.7149 0.5 10C0.5 8.34179 0.903281 6.77804 1.61812 5.40112H1.61867L3.88398 5.81644L4.87633 8.06815C4.66863 8.67366 4.55543 9.32366 4.55543 10C4.55551 10.7341 4.68848 11.4374 4.93242 12.0863Z"
                                            fill="#FBBB00" />
                                        <path
                                            d="M20.3242 8.1319C20.439 8.73682 20.4989 9.36155 20.4989 10C20.4989 10.716 20.4236 11.4143 20.2802 12.088C19.7934 14.3803 18.5214 16.3819 16.7594 17.7984L16.7588 17.7978L13.9055 17.6522L13.5017 15.1314C14.6709 14.4456 15.5847 13.3726 16.066 12.088H10.7188V8.1319H20.3242Z"
                                            fill="#518EF8" />
                                        <path
                                            d="M16.7595 17.7978L16.7601 17.7984C15.0464 19.1758 12.8694 20 10.4996 20C6.69141 20 3.38043 17.8715 1.69141 14.739L4.93207 12.0863C5.77656 14.3401 7.95074 15.9445 10.4996 15.9445C11.5952 15.9445 12.6216 15.6484 13.5024 15.1313L16.7595 17.7978Z"
                                            fill="#28B446" />
                                        <path
                                            d="M16.882 2.30219L13.6425 4.95437C12.7309 4.38461 11.6534 4.05547 10.4991 4.05547C7.89246 4.05547 5.67762 5.73348 4.87543 8.06812L1.61773 5.40109H1.61719C3.28148 2.1923 6.63422 0 10.4991 0C12.9254 0 15.1502 0.864297 16.882 2.30219Z"
                                            fill="#F14336" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2478_11334">
                                            <rect width="20" height="20" fill="white"
                                                transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                Google
                            </a>
                            <a href="#" class="btn-social">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.5 10C20.5 14.9914 16.843 19.1285 12.0625 19.8785V12.8906H14.3926L14.8359 10H12.0625V8.12422C12.0625 7.3332 12.45 6.5625 13.6922 6.5625H14.9531V4.10156C14.9531 4.10156 13.8086 3.90625 12.7145 3.90625C10.4305 3.90625 8.9375 5.29063 8.9375 7.79688V10H6.39844V12.8906H8.9375V19.8785C4.15703 19.1285 0.5 14.9914 0.5 10C0.5 4.47734 4.97734 0 10.5 0C16.0227 0 20.5 4.47734 20.5 10Z"
                                        fill="#1877F2" />
                                    <path
                                        d="M14.3926 12.8906L14.8359 10H12.0625V8.12418C12.0625 7.33336 12.4499 6.5625 13.6921 6.5625H14.9531V4.10156C14.9531 4.10156 13.8088 3.90625 12.7146 3.90625C10.4304 3.90625 8.9375 5.29063 8.9375 7.79688V10H6.39844V12.8906H8.9375V19.8785C9.44664 19.9584 9.96844 20 10.5 20C11.0316 20 11.5534 19.9584 12.0625 19.8785V12.8906H14.3926Z"
                                        fill="white" />
                                </svg>

                                Facebook
                            </a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- /.login -->

    <!-- register -->
    <div class="modal modal-account fade" id="modalRegister">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="flat-account">
                    <div class="banner-account">
                        <img src="/assets/imagessection/banner-register.jpg" alt="banner">
                    </div>
                    <form class="form-account">
                        <div class="title-box">
                            <h4>Register</h4>
                            <span class="close-modal icon-close" data-bs-dismiss="modal"></span>
                        </div>
                        <div class="box">
                            <fieldset class="box-fieldset">
                                <label for="username">User name</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4869 14.0435C12.9628 13.3497 12.2848 12.787 11.5063 12.3998C10.7277 12.0126 9.86989 11.8115 9.00038 11.8123C8.13086 11.8115 7.27304 12.0126 6.49449 12.3998C5.71594 12.787 5.03793 13.3497 4.51388 14.0435M13.4869 14.0435C14.5095 13.1339 15.2307 11.9349 15.5563 10.6056C15.8818 9.27625 15.7956 7.87934 15.309 6.60014C14.8224 5.32093 13.9584 4.21986 12.8317 3.44295C11.7049 2.66604 10.3686 2.25 9 2.25C7.63137 2.25 6.29508 2.66604 5.16833 3.44295C4.04158 4.21986 3.17762 5.32093 2.69103 6.60014C2.20443 7.87934 2.11819 9.27625 2.44374 10.6056C2.76929 11.9349 3.49125 13.1339 4.51388 14.0435M13.4869 14.0435C12.2524 15.1447 10.6546 15.7521 9.00038 15.7498C7.3459 15.7523 5.74855 15.1448 4.51388 14.0435M11.2504 7.31228C11.2504 7.90902 11.0133 8.48131 10.5914 8.90327C10.1694 9.32523 9.59711 9.56228 9.00038 9.56228C8.40364 9.56228 7.83134 9.32523 7.40939 8.90327C6.98743 8.48131 6.75038 7.90902 6.75038 7.31228C6.75038 6.71554 6.98743 6.14325 7.40939 5.72129C7.83134 5.29933 8.40364 5.06228 9.00038 5.06228C9.59711 5.06228 10.1694 5.29933 10.5914 5.72129C11.0133 6.14325 11.2504 6.71554 11.2504 7.31228Z"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input type="text" class="form-control" id="username"
                                        placeholder="User name">
                                </div>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="email">Email address</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.3125 5.0625V12.9375C16.3125 13.3851 16.1347 13.8143 15.8182 14.1307C15.5018 14.4472 15.0726 14.625 14.625 14.625H3.375C2.92745 14.625 2.49822 14.4472 2.18176 14.1307C1.86529 13.8143 1.6875 13.3851 1.6875 12.9375V5.0625M16.3125 5.0625C16.3125 4.61495 16.1347 4.18573 15.8182 3.86926C15.5018 3.55279 15.0726 3.375 14.625 3.375H3.375C2.92745 3.375 2.49822 3.55279 2.18176 3.86926C1.86529 4.18573 1.6875 4.61495 1.6875 5.0625M16.3125 5.0625V5.24475C16.3125 5.53286 16.2388 5.81618 16.0983 6.06772C15.9578 6.31926 15.7553 6.53065 15.51 6.68175L9.885 10.143C9.61891 10.3069 9.31252 10.3937 9 10.3937C8.68748 10.3937 8.38109 10.3069 8.115 10.143L2.49 6.6825C2.24469 6.5314 2.04215 6.32001 1.90168 6.06847C1.7612 5.81693 1.68747 5.53361 1.6875 5.2455V5.0625"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <input type="text" class="form-control" id="email"
                                        placeholder="Email address">
                                </div>

                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="pass2">Password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input type="password" class="form-control" id="pass2"
                                        placeholder="Your password">
                                </div>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="confirm">Confirm password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input type="password" class="form-control" id="confirm"
                                        placeholder="Confirm password">
                                </div>
                            </fieldset>
                        </div>
                        <div class="box box-btn">
                            <a href="dashboard.html" class="tf-btn bg-color-primary w-full">Sign Up</a>
                            <div class="text text-center">Don’t you have an account? <a href="#modalLogin"
                                    data-bs-toggle="modal" class="text-color-primary">Sign In</a></div>
                        </div>
                        <p class="box text-center caption-2">or login with</p>
                        <div class="group-btn">
                            <a href="#" class="btn-social">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2478_12036)">
                                        <path
                                            d="M4.93242 12.0863L4.23625 14.6852L1.69176 14.739C0.931328 13.3286 0.5 11.7149 0.5 10C0.5 8.34179 0.903281 6.77804 1.61812 5.40112H1.61867L3.88398 5.81644L4.87633 8.06815C4.66863 8.67366 4.55543 9.32366 4.55543 10C4.55551 10.7341 4.68848 11.4374 4.93242 12.0863Z"
                                            fill="#FBBB00" />
                                        <path
                                            d="M20.3242 8.1319C20.439 8.73682 20.4989 9.36155 20.4989 10C20.4989 10.716 20.4236 11.4143 20.2802 12.088C19.7934 14.3803 18.5214 16.3819 16.7594 17.7984L16.7588 17.7978L13.9055 17.6522L13.5017 15.1314C14.6709 14.4456 15.5847 13.3726 16.066 12.088H10.7188V8.1319H20.3242Z"
                                            fill="#518EF8" />
                                        <path
                                            d="M16.7595 17.7978L16.7601 17.7984C15.0464 19.1758 12.8694 20 10.4996 20C6.69141 20 3.38043 17.8715 1.69141 14.739L4.93207 12.0863C5.77656 14.3401 7.95074 15.9445 10.4996 15.9445C11.5952 15.9445 12.6216 15.6484 13.5024 15.1313L16.7595 17.7978Z"
                                            fill="#28B446" />
                                        <path
                                            d="M16.882 2.30219L13.6425 4.95437C12.7309 4.38461 11.6534 4.05547 10.4991 4.05547C7.89246 4.05547 5.67762 5.73348 4.87543 8.06812L1.61773 5.40109H1.61719C3.28148 2.1923 6.63422 0 10.4991 0C12.9254 0 15.1502 0.864297 16.882 2.30219Z"
                                            fill="#F14336" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2478_12036">
                                            <rect width="20" height="20" fill="white"
                                                transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                Google
                            </a>
                            <a href="#" class="btn-social">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2478_12044)">
                                        <path
                                            d="M20.5 10C20.5 14.9914 16.843 19.1285 12.0625 19.8785V12.8906H14.3926L14.8359 10H12.0625V8.12422C12.0625 7.3332 12.45 6.5625 13.6922 6.5625H14.9531V4.10156C14.9531 4.10156 13.8086 3.90625 12.7145 3.90625C10.4305 3.90625 8.9375 5.29063 8.9375 7.79688V10H6.39844V12.8906H8.9375V19.8785C4.15703 19.1285 0.5 14.9914 0.5 10C0.5 4.47734 4.97734 0 10.5 0C16.0227 0 20.5 4.47734 20.5 10Z"
                                            fill="#1877F2" />
                                        <path
                                            d="M14.3926 12.8906L14.8359 10H12.0625V8.12418C12.0625 7.33336 12.4499 6.5625 13.6921 6.5625H14.9531V4.10156C14.9531 4.10156 13.8088 3.90625 12.7146 3.90625C10.4304 3.90625 8.9375 5.29063 8.9375 7.79688V10H6.39844V12.8906H8.9375V19.8785C9.44664 19.9584 9.96844 20 10.5 20C11.0316 20 11.5534 19.9584 12.0625 19.8785V12.8906H14.3926Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2478_12044">
                                            <rect width="20" height="20" fill="white"
                                                transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Facebook
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- register -->


    <!-- mobile-nav -->
    <div class="offcanvas offcanvas-start mobile-nav-wrap " tabindex="-1" id="menu-mobile"
        aria-labelledby="menu-mobile">
        <div class="offcanvas-header top-nav-mobile">
            <div class="offcanvas-title">
                <a href="index.html"><img src="/assets/imageslogo/logo%402x.png" alt=""></a>
            </div>
            <div data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="icon-close"></i>
            </div>
        </div>
        <div class="offcanvas-body inner-mobile-nav">
            <div class="mb-body">
                <ul id="menu-mobile-menu">
                    <li class="menu-item menu-item-has-children-mobile ">
                        <a href="#dropdown-menu-one" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="dropdown-menu-one">
                            Home
                        </a>
                        <div id="dropdown-menu-one" class="collapse" data-bs-parent="#menu-mobile-menu">
                            <ul class="sub-mobile ">
                                <li class="menu-item"><a href="index.html">Home Pagess 01</a></li>
                                <li class="menu-item"><a href="home02.html">Home Page 02</a></li>
                                <li class="menu-item"><a href="home03.html">Home Page 03</a></li>
                                <li class="menu-item"><a href="home04.html">Home Page 04</a></li>
                                <li class="menu-item"><a href="home05.html">Home Page 05</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-has-children-mobile">
                        <a href="#dropdown-menu-two" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="dropdown-menu-two">
                            Listing
                        </a>
                        <div id="dropdown-menu-two" class="collapse" data-bs-parent="#menu-mobile-menu">
                            <ul class="sub-mobile">
                                <li class="menu-item menu-item-has-children-mobile-2">
                                    <a href="#sub-layout" class="item-menu-mobile  collapsed"
                                        data-bs-toggle="collapse" aria-expanded="true"
                                        aria-controls="sub-agents">Layout</a>
                                    <div id="sub-layout" class="collapse" data-bs-parent="#dropdown-menu-two">
                                        <ul class="sub-mobile">
                                            <li class="menu-item ">
                                                <a href="property-grid-full-width.html" class="item-menu-mobile ">Grid
                                                    Style - Full Width</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="property-gird-top-search.html" class="item-menu-mobile ">Grid
                                                    Style - Top Search</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="property-gird-left-sidebar.html"
                                                    class="item-menu-mobile ">Grid
                                                    Style - Sidebar Left</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="property-gird-right-sidebar.html" class="item-menu-mobile ">
                                                    Grid Style - Sidebar Right</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="property-list-full-width.html" class="item-menu-mobile ">
                                                    List
                                                    Style - Full Width</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="property-list-top-search.html" class="item-menu-mobile ">
                                                    List
                                                    Style - Top Search</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="property-list-left-sidebar.html"
                                                    class="item-menu-mobile ">List
                                                    Style - Sidebar Left</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="property-list-right-sidebar.html" class="item-menu-mobile ">
                                                    List Style - Sidebar Right</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile-2">
                                    <a href="#sub-feaure" class="item-menu-mobile  collapsed"
                                        data-bs-toggle="collapse" aria-expanded="true"
                                        aria-controls="sub-agents">Feature</a>
                                    <div id="sub-feaure" class="collapse" data-bs-parent="#dropdown-menu-two">
                                        <ul class="sub-mobile">
                                            <li class="menu-item">
                                                <a href="property-half-map-grid.html">Property Half Map Grid</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="property-half-map-list.html">Property Half Map List</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="property-half-top-map.html">Property Half Top Map</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="property-filter-popup.html" class="item-menu-mobile ">
                                                    Property Filter Popup</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="property-filter-popup-left.html"
                                                    class="item-menu-mobile ">Property Filter Popup Left</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="property-filter-popup-right.html" class="item-menu-mobile ">
                                                    Property Filter Popup Right</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile-2">
                                    <a href="#sub-details" class="item-menu-mobile  collapsed"
                                        data-bs-toggle="collapse" aria-expanded="true"
                                        aria-controls="sub-agents">Listing Details</a>
                                    <div id="sub-details" class="collapse" data-bs-parent="#dropdown-menu-two">
                                        <ul class="sub-mobile">
                                            <li class="menu-item">
                                                <a href="property-detail-v1.html">Property Details 1</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="property-detail-v2.html">Property Details 2</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="property-detail-v3.html">Property Details 3</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="property-detail-v4.html">Property Details 4</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="property-detail-v5.html">Property Details 5</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-has-children-mobile current-menu-item">
                        <a href="#dropdown-menu-four" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="dropdown-menu-four">
                            Pages
                        </a>
                        <div id="dropdown-menu-four" class="collapse" data-bs-parent="#menu-mobile-menu">
                            <ul class="sub-mobile">
                                <li class="menu-item menu-item-has-children-mobile-2">
                                    <a href="#sub-agents" class="item-menu-mobile  collapsed"
                                        data-bs-toggle="collapse" aria-expanded="true"
                                        aria-controls="sub-agents">Agents</a>
                                    <div id="sub-agents" class="collapse" data-bs-parent="#dropdown-menu-four">
                                        <ul class="sub-mobile">
                                            <li class="menu-item ">
                                                <a href="agents.html" class="item-menu-mobile "> Agents</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="agents-details.html" class="item-menu-mobile "> Agnet
                                                    Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile-2">
                                    <a href="#sub-agency" class="item-menu-mobile  collapsed"
                                        data-bs-toggle="collapse" aria-expanded="true"
                                        aria-controls="sub-agency">Agencies</a>
                                    <div id="sub-agency" class="collapse" data-bs-parent="#dropdown-menu-four">
                                        <ul class="sub-mobile">
                                            <li class="menu-item ">
                                                <a href="agency-grid.html" class="item-menu-mobile ">Agencies Grid</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="agency-list.html" class="item-menu-mobile "> Agencies
                                                    List</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="agency-details.html" class="item-menu-mobile "> Agencies
                                                    Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item"><a href="home-loan-process.html">Home Loan Process</a></li>
                                <li class="menu-item"><a href="career.html">Career</a></li>
                                <li class="menu-item "><a href="faq.html">Faq's</a></li>
                                <li class="menu-item current-item"><a href="dashboard.html">Dashboard</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item menu-item-has-children-mobile">
                        <a href="#dropdown-menu-five" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="dropdown-menu-five">
                            Blogs
                        </a>
                        <div id="dropdown-menu-five" class="collapse" data-bs-parent="#menu-mobile-menu">
                            <ul class="sub-mobile ">
                                <li class="menu-item"><a href="blog-grid.html">Blog Grid</a></li>
                                <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                                <li class="menu-item"><a href="blog-details.html">Blog Details </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item ">
                        <a href="contact.html" class="tem-menu-mobile "> Contact</a>
                    </li>
                </ul>
                <div class="support">
                    <a href="#" class="text-need"> Need help?</a>
                    <ul class="mb-info">
                        <li>Call Us Now: <span class="number">1-555-678-8888</span></li>
                        <li>Support 24/7: <a href="#">themesflat@gmail.com</a></li>
                        <li>
                            <div class="wrap-social">
                                <p>Follow us:</p>
                                <ul class="tf-social  style-2">
                                    <li>
                                        <a href="#">
                                            <i class="icon-fb"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-X"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-linked"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-ins"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- /mobile-nav -->

</x-guest-layout>
