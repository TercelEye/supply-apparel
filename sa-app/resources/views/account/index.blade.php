@extends('layouts.app')

@section('content')


<main class="boutique_settings">
    <section class="section_1 owner_menu">
       @include('layouts.seller_navigation')
    </section>
    <section class="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
                    <div class="row">
                        <div class="col-sm-3 col-xs-4 left_bar">
                            <ul class="nav nav-tabs settings_tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#profile" aria-controls="profile" role="tab"
                                       data-toggle="tab"><span>Profile</span> <i class="icon"></i></a>
                                </li>
                                <li role="presentation">
                                    <a href="#password" aria-controls="password" role="tab"
                                       data-toggle="tab"><span>Change Password</span><i class="icon"></i></a>
                                </li>
                                <li role="presentation">
                                    <a href="#membership" aria-controls="membership" role="tab"
                                       data-toggle="tab"><span>Membership Plan</span><i class="icon"></i></a>
                                </li>

                                 <li role="presentation">
                                    <a href="#withdrawal" aria-controls="withdrawal" role="tab"
                                       data-toggle="tab"><span>Withdrawal</span><i class="icon"></i></a>
                                </li>
                                <li role="presentation">
                                    <a href="#delete" aria-controls="delete" role="tab"
                                       data-toggle="tab"><span>Delete Account</span><i class="icon"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-9 col-xs-8 right_bar">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="profile">
                                    <ul class="nav nav-tabs profile_tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#customer_profile" aria-controls="customer" role="tab"
                                               data-toggle="tab">Customer Profile</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#boutique_profile" aria-controls="boutique" role="tab"
                                               data-toggle="tab">Boutique Profile</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="customer_profile">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <h3>Name</h3>
                                                    <input type="text" name="name" id="name" value="Ryan Almeida"/>
                                                </div>
                                                <div class="form-group">
                                                    <h3>Email Address</h3>
                                                    <input type="email" name="email" id="email"
                                                           value="ryan.almeida86@gmail.com"/>
                                                </div>
                                                <div class="form-group date_block">
                                                    <h3>Date of Birth</h3>
                                                    <div class="input-group">
                                                        <input readonly type="text" name="birth_date_r"
                                                               id="birth_date_r" readonly
                                                               value="08 - April - 1986"/>
                                                        <div class="input-group-addon"><i class="date_icon"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="buttons_block">
                                                    <a href="#" class="btn_edit">Edit</a>
                                                    <a href="#" class="btn_save">Save</a>
                                                </div>
                                            </form>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="boutique_profile">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <h3>Boutique's Name</h3>
                                                    <input type="text" name="boutique_name" id="boutique_name"
                                                           value="Bangkok Tshirts"/>
                                                </div>
                                                <div class="form-group">
                                                    <h3>Enter a description for your boutique</h3>
                                                    <textarea name="boutique_desc" id="boutique_desc">Bangkok TShirts is a luxury retail chain of high quality tshirts that are available to be purchased anywhere around the world. The brand has won many awards and is one of the premier apparel brands in the world.</textarea>
                                                </div>
                                                <div class="form-group boutique_type_block">
                                                    <h3>Boutique type</h3>
                                                    <div class="boutique_type_select">
                                                        <input type="hidden" name="boutique_type"
                                                               id="boutique_type" value="1"/>
                                                        <div class="type active" data-type="1">Own-label</div>
                                                        <div class="type" data-type="2">Pre-owned</div>
                                                        <div class="type" data-type="3">multi-brand</div>
                                                    </div>
                                                </div>
                                                <div class="form-group product_type_block">
                                                    <h3>Product type</h3>
                                                    <div class="product_type_select">
                                                        <input type="hidden" name="product_type" value="1"
                                                               id="product_type"/>
                                                        <div class="type active" data-type="1"><i class="men"></i>Men
                                                        </div>
                                                        <div class="type" data-type="2"><i class="women"></i>Women
                                                        </div>
                                                        <div class="type" data-type="3"><i class="kids"></i>Kids
                                                        </div>
                                                        <div class="type" data-type="4">All</div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h3>your country</h3>
                                                    <div class="country_select">
                                                        <i class="icons"></i>
                                                        <div class="ui selection dropdown country_dropdown"
                                                             id="country_dropdown_settings_step_1">
                                                            <i class="dropdown icon"></i>
                                                            <input type="hidden" name="country" id="country">
                                                            <div class="default text">
                                                                United States of America
                                                            </div>
                                                            <div class="menu">
                                                                <div class="item active selected" data-value="1">
                                                                    <span>United States of America</span>
                                                                </div>
                                                                <div class="item" data-value="2">
                                                                    <span>Moldova</span>
                                                                </div>
                                                                <div class="item" data-value="2">
                                                                    <span>United Arab Emirates</span>
                                                                </div>
                                                                <div class="item" data-value="2">
                                                                    <span>Russia</span>
                                                                </div>
                                                                <div class="item" data-value="2">
                                                                    <span>Saint Vincent and the Grenadines</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group file_block">
                                                    <h3>Cover photo</h3>
                                                    <input type="file" name="boutique_cover" id="boutique_cover">
                                                    <div class="cover_photo"></div>
                                                    <label for="boutique_cover">Change Cover</label>
                                                </div>
                                                <div class="buttons_block">
                                                    <a href="#" class="btn_edit">Edit</a>
                                                    <a href="#" class="btn_save">Save</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="password">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <h3>Old Password</h3>
                                            <input type="password" name="old_password" id="old_password"
                                                   placeholder="Enter Old Password"/>
                                        </div>
                                        <div class="form-group">
                                            <h3>New Password</h3>
                                            <input type="password" name="new_password" id="new_password"
                                                   placeholder="Enter New Password"/>
                                        </div>
                                        <div class="form-group">
                                            <h3>Confirm new password</h3>
                                            <input type="password" name="confirm_new_password" id="confirm_new_password"
                                                   placeholder="Re-enter New Password"/>
                                        </div>
                                        <div class="buttons_block">
                                            <a href="#" class="btn_save">Save</a>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="membership">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-6 item">
                                            <div class="item_block active">
                                                <div class="item_header free">
                                                    Free
                                                </div>
                                                <div class="item_body">
                                                    <div class="plan_features">
                                                        Unlimited products
                                                    </div>
                                                    <div class="plan_features">
                                                        1 look book
                                                    </div>
                                                    <div class="plan_features">
                                                        9am - 6pm customer support
                                                    </div>
                                                    <div class="plan_features">
                                                        <span>20% commission per purchase</span>
                                                        <a href="owner_boutique_page_empty.html" class="btn-select">Selected</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6 item">
                                            <div class="item_block">
                                                <div class="item_header">
                                                    <h3>$10</h3>
                                                    <p>per month</p>
                                                </div>
                                                <div class="item_body">
                                                    <div class="plan_features">
                                                        Unlimited products
                                                    </div>
                                                    <div class="plan_features">
                                                        3 look books
                                                    </div>
                                                    <div class="plan_features">
                                                        24 x 7 customer support
                                                    </div>
                                                    <div class="plan_features">
                                                        <span>15% commission per purchase</span>
                                                        <a href="#" class="btn-select">Upgrade</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6 item">
                                            <div class="item_block">
                                                <div class="item_header">
                                                    <h3>$30</h3>
                                                    <p>per month</p>
                                                </div>
                                                <div class="item_body">
                                                    <div class="plan_features">
                                                        Unlimited products
                                                    </div>
                                                    <div class="plan_features">
                                                        Unlimited look books
                                                    </div>
                                                    <div class="plan_features">
                                                        24 x 7 customer support
                                                    </div>
                                                    <div class="plan_features">
                                                        <span>0% commission per purchase</span>
                                                        <a href="#" class="btn-select">Upgrade</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div role="tabpanel" class="tab-pane" id="withdrawal">
                                    @include('withdrawal.index')
                                 </div>
                                <div role="tabpanel" class="tab-pane" id="delete">
                                    <h4>
                                        Deleting your account will result in the loss of your transaction history,
                                        invetory, look books, blogs and feedback.
                                    </h4>
                                    <div class="delete_block">
                                        <h5>Still want to delete your account</h5>
                                        <a data-toggle="modal" data-target="#delete_account_modal"
                                           class="btn_delete_account">Yes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@stop