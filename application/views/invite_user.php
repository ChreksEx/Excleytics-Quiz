<?php
const ACCOUNT_TYPE_ID_USER = 2;
?>

<div class="container">


    <h3><?php echo $title; ?></h3>


    <div class="row">
        <form method="post" action="<?php echo site_url('user/insert_invitation/'); ?>">

            <div class="col-md-8">
                <br>
                <div class="login-panel panel panel-default">
                    <div class="panel-body">


                        <?php
                        if ($this->session->flashdata('message')) {
                            echo $this->session->flashdata('message');
                        }
                        ?>


                        <div class="form-group">
                            <label for="inputEmail" class="sr-only"><?php echo $this->lang->line('email_address'); ?></label>
                            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="<?php echo $this->lang->line('email_address'); ?>" required autofocus>
                        </div>

                        <div class="form-group">
                            <label><?php echo $this->lang->line('account_type'); ?></label>
                            <select class="form-control" name="su">
                                <?php
                                foreach ($account_type as $ak => $val) {
                                    ?>
                                    <option value="<?php echo $val['account_id']; ?>"
                                        <?=  $val['account_id'] == ACCOUNT_TYPE_ID_USER ? 'selected' : '' ?>
                                    ><?php echo $val['account_name']; ?></option>
                                    <?php
                                }
                                ?>

                            </select>
                        </div>


                        <button class="btn btn-default" type="submit"><?php echo $this->lang->line('submit'); ?></button>

                    </div>
                </div>


            </div>
        </form>
    </div>


</div>
<script>
    getexpiry();
</script>
