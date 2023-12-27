<?= view('Modules\Home\Views\common\header') ?>

<div class="container mt-5">
    <div class="row justify-content-center centered-form m-2 ">
        <div class="col-md-4 form-border-index-page">
            <form action="" autocomplete="off" method="post" id="bus-tracking-form" class="mb-3">
                <div class="d-flex flex-column align-items-center">
                    <img src="<?php echo base_url() ?>public/assets/images/profile.png" class="img-fluid mx-auto"
                        style="width: 200px; height: 200px" alt="Create Account">
                </div>
                <div class="form-group">
                    <label for="from_station"></label>
                    <input type="text" placeholder="Enter Email" class="form-control shadow-none stn-inpt" name="email"
                        required>
                </div>
                <div class="form-group">
                    <label for="to_station"></label>
                    <input type="text" placeholder="Enter Password" class="form-control shadow-none stn-inpt"
                        name="password" required>
                </div>
                <button type="submit" class="btn btn-primary mt-2 shadow none sbmt-btn"
                    style="background: linear-gradient(90deg, rgba(0,174,255,1) 0%, rgba(14,123,160,1) 0%, rgba(32,100,127,1) 100%); ">Log
                    In</button>
            </form>
            <div id="chat-container"></div>
        </div>
    </div>
</div>
<?= view('Modules\Home\Views\common\footer') ?>