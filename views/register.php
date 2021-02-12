
<h1>Register</h1>

<?php
$form =  \app\core\form\Form::begin('','post');
echo $form->field($model,"firstName");
echo $form->field($model,"lastName");
echo $form->field($model,"email");
echo $form->field($model,"password")->passwordField();
echo $form->field($model,"confirmPassword")->passwordField();
?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo \app\core\form\Form::end() ?>
<!--    <form action="" method="post">-->
<!--        <div class="row">-->
<!--            <div class="col">-->
<!--                <div class="mb-3">-->
<!--                    <label>First Name</label>-->
<!--                    <input name="firstName" type="text" class="form-control --><?php //echo $model->hasError('firstName')? ' is-invalid': '' ?><!--">-->
<!--                    <div class="invalid-feedback">-->
<!--                        --><?php //echo $model->getFirstError("firstName") ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col">-->
<!--                <div class="mb-3">-->
<!--                    <label>Last Name</label>-->
<!--                    <input name="lastName" type="text" class="form-control">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="mb-3">-->
<!--            <label class="form-label">Email</label>-->
<!--            <input name="email" type="email" class="form-control">-->
<!--        </div>-->
<!--        <div class="mb-3">-->
<!--            <label>Password</label>-->
<!--            <input name="password" type="password" class="form-control">-->
<!--        </div>-->
<!--        <div class="mb-3">-->
<!--            <label>Confirm Password</label>-->
<!--            <input name="confirmPassword" type="password" class="form-control">-->
<!--        </div>-->
<!--        <button type="submit" class="btn btn-primary">Submit</button>-->
<!--    </form>-->