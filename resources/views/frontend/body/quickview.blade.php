<div class="modal fade quick-view-popup" id="content_quickview">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-body">

                <div id="ProductSection-product-template" class="product-template__container prstyle1">

                    <div class="product-single">

                        <!-- Start model close -->
                        <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right"
                            title="close"><span class="icon icon anm anm-times-l" id="closeModal"></span></a>
                        <!-- End model close -->


                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img">
                                    <div class="pl-20">
                                        <img src="" alt="" id="pimage" />
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                                <div class="product-single__meta">

                                    <h2 class="product-single__title" id="pname"></h2>


                                    <div class="prInfoRow">

                                        <div class="product-sku">
                                            <span class="variant-sku">
                                                <span class="badge badge-pill badge-success" id="aviable"
                                                    style="color: #fff;padding: 5px 10px; border-radius: 5px;background-color: green;">
                                                </span>
                                                <span class="badge badge-pill badge-danger" id="stockout"
                                                    style="color: #fff;padding: 5px 10px; border-radius: 5px;background-color: red;">
                                                </span>
                                            </span>
                                        </div>

                                        <div class="product-sku">
                                            <span style="font-weight: 700">SKU:</span>
                                            <span class="variant-sku" id="pcode"></span>
                                        </div>

                                        <div class="product-sku">
                                            <span style="font-weight: 700">Stock:</span>
                                            <span class="variant-sku" id="pstock"></span>
                                        </div>

                                    </div>


                                    <p class="product-single__price product-single__price-product-template">

                                        <span class="visually-hidden">Regular price</span>

                                        <s id="ComparePrice-product-template">
                                            <span class="money">BDT</span>
                                            <span class="money" id="oldprice">$</span>
                                        </s>

                                        <span
                                            class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template">
                                                <span class="money">BDT</span>
                                                <span class="money" id="pprice">$</span>
                                            </span>
                                        </span>

                                    </p>


                                    <div class="product-single__description rte" id="pshort"></div>



                                    <!-- Product Action -->
                                    <div class="product-action clearfix">
                                        <div class="product-form__item--quantity">
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);">
                                                        <i class="fa anm anm-minus-r" aria-hidden="true">
                                                        </i>
                                                    </a>
                                                    <input type="text" id="qty" name="qty" value="1"
                                                        min="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);">
                                                        <i class="fa anm anm-plus-r" aria-hidden="true">
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-form__item--submit">
                                            <input type="hidden" id="product_id">
                                            <button type="submit" name="add" class="btn product-form__cart-submit"
                                                onclick="addToCart()">
                                                <span>Add to cart</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- End Product Action -->



                                    <div class="product-info">

                                        <p class="product-type">
                                            <span class="lbl">Brand:</span>
                                            <span class="variant-sku" id="pbrand"></span>
                                        </p>

                                        <p class="product-type">
                                            <span class="lbl">Category:</span>
                                            <span class="variant-sku" id="pcategory"></span>
                                        </p>

                                        <p class="product-type">
                                            <span class="lbl">SubCategory:</span>
                                            <span class="variant-sku" id="psubcategory"></span>
                                        </p>

                                        <p class="product-tags">
                                            <span class="lbl">Tags:</span>
                                            <span class="variant-sku" id="ptags"></span>
                                        </p>

                                    </div>


                                </div>
                            </div>

                        </div>
                        <!--End-product-single-->

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
