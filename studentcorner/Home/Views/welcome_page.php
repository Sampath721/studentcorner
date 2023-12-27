<?= view('Modules\Home\Views\common\header') ?>
<!DOCTYPE html>
<html>


<div class="container mt-5">
    <?php if (session()->getFlashdata('lgot')): ?>
        <div class="alert alert-warning alert-dismissible fade show d-flex justify-content-between" role="alert">
            <?php echo session()->getFlashdata('lgot'); ?>
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('scss')): ?>
        <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert">
            <?php echo session()->getFlashdata('scss'); ?>
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="row justify-content-center centered-form m-2">
        <div class="col-md-4 form-border-index-page">
            <?php if (session()->getFlashdata('sts')): ?>
                <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert">
                    <?php echo session()->getFlashdata('sts'); ?>
                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <img src="<?= base_url() ?>public/assets/images/bus-stop.png"
                class="img-fluid index-logo mx-auto d-block mt-3" alt="rtc bus image" srcset="">
            <form action="" autocomplete="off" method="post" id="bus-tracking-form" class="mb-3">
                <div class="form-group">
                    <label for="from_station"></label>
                    <input type="text" placeholder="Enter From Station" class="form-control shadow-none stn-inpt"
                        name="from_station" required>
                </div>
                <div class="form-group">
                    <label for="to_station"></label>
                    <input type="text" placeholder="Enter To Station" class="form-control shadow-none stn-inpt"
                        name="to_station" required>
                </div>
                <button type="submit" class="btn btn-primary mt-2 shadow none sbmt-btn" style="background: linear-gradient(90deg, rgba(0,174,255,1) 0%, rgba(14,123,160,1) 0%, rgba(32,100,127,1) 100%); ">Find Bus</button>
            </form>

            <div id="chat-container"></div>
        </div>
    </div>
</div>


<?= view('Modules\Home\Views\common\footer') ?>