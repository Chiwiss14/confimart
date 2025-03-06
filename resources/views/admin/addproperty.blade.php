<x-app-layout>
    <!-- .main-content -->
    <div class="main-content w-100">
        <div class="main-content-inner">
            <div class="button-show-hide show-mb">
                <span class="body-1">Show Dashboard</span>
                @foreach ($errors->all() as $err)
                    <p class="text-center text-danger">{{ $err }}</p>
                @endforeach
            </div>
            <form class="box-info-property" action="{{ route('admin.property.store') }}" method="POST"
                enctype="multipart/form-data"> @csrf
                <div class="widget-box-2 mb-20">
                    <h3 class="title">Upload Media</h3>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="widget-box-2 mb-20">
                    @foreach ($errors->all() as $err)
                        <p class="text-red-500 text-center">{{ $err }}</p>
                    @endforeach
                    <h5 class="title">Information</h5>


                    <fieldset class="box box-fieldset">
                        <label for="title">
                            Title:<span>*</span>
                        </label>
                        <input type="text" name="title" class="form-control" placeholder="Choose">
                    </fieldset>
                    <fieldset class="box box-fieldset">
                        <label for="desc">Description:</label>
                        <textarea class="textarea" name="description" placeholder="Your Decscription"></textarea>
                    </fieldset>
                    <div class="box grid-layout-3 gap-30">
                        <fieldset class="box-fieldset">
                            <label for="address">
                                Full Address:<span>*</span>
                            </label>
                            <input type="text" class="form-control" name="address"
                                placeholder="Enter property full address">
                        </fieldset>
                        <fieldset class="box-fieldset">
                            <label for="country">
                                Country:<span>*</span>
                            </label>
                            <select name="country" id="" class="w-full form-control nice-select">
                                <option>Nigeria</option>
                                <option>US</option>
                                <option>UK</option>
                            </select>
                        </fieldset>
                    </div>
                </div>
                <div class="widget-box-2 mb-20">
                    <h3 class="title">Price</h3>
                    <div class="box-price-property">
                        <fieldset class="box-fieldset mb-30">
                            <label for="price">Price:<span>*</span></label>
                            <input type="text" class="form-control" name="price"
                                placeholder="Example value: 12345.67">
                        </fieldset>
                    </div>
                </div>
                <div class="widget-box-2 mb-20">
                    <label for="">Select Property
                        <select name="type" id="" class="w-full form-control nice-select">
                            <option>Apartment</option>
                            <option>Self contain</option>
                            <option>Duplex</option>
                        </select>
                    </label>

                </div>
                <div class="box-btn">
                    <button class="tf-btn bg-color-primary pd-13">AddProperty</button>
                </div>
            </form>
            <!-- .footer-dashboard -->
            <div class="footer-dashboard">
                <p>Copyright © 2024 Popty</p>
                <ul class="list">
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Support</a></li>
                </ul>

            </div><!-- /.footer-dashboard -->
        </div>
        <div class="overlay-dashboard"></div>

    </div><!-- /.main-content -->

</x-app-layout>
