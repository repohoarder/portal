
        <div class="form"></div>
            <?php
                $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                    'id' => 'cv-list-form',
                    // Please note: When you enable ajax validation, make sure the corresponding
                    // controller action is handling ajax validation correctly.
                    // There is a call to performAjaxValidation() commented in generated controller code.
                    // See class documentation of CActiveForm for details on this.
                    'enableAjaxValidation' => false,
                ));
            ?>

            <?php echo $form->errorSummary($model); ?>
            <?php echo $form->dropDownListControlGroup($model, 'category_id', CHtml::listData(CvCategories::model()->findAll(), 'id', 'name'), array('span' => 5)); ?>
            <?php echo $form->textFieldControlGroup($model, 'first_name', array('span' => 5, 'maxlength' => 255)); ?>
            <?php echo $form->textFieldControlGroup($model, 'last_name', array('span' => 5, 'maxlength' => 255)); ?>
            <?php echo $form->dropDownListControlGroup($model, 'gender', $model->genderTypes, array('span' => 5, 'maxlength' => 1)); ?>
            <?php echo $form->dateFieldControlGroup($model, 'birth_date', array('span' => 5)); ?>
            <?php echo $form->textFieldControlGroup($model, 'contact_phone', array('span' => 5, 'maxlength' => 15)); ?>
            <?php echo $form->textFieldControlGroup($model, 'email', array('span' => 5, 'maxlength' => 255)); ?>
            <?php echo $form->checkBoxListControlGroup($model, 'residencies_ids', CHtml::listData(CitiesList::model()->findAll(array('order' => 'city_name')), 'city_index', 'city_name')); ?>
            <?php echo $form->dropDownListControlGroup($model, 'education', $model->educationTypes, array('span' => 5)); ?>
            <?php echo $form->textAreaControlGroup($model, 'eduction_info', array('rows' => 6, 'span' => 8)); ?>
            <?php echo $form->textAreaControlGroup($model, 'work_experience', array('rows' => 6, 'span' => 8)); ?>
            <?php echo $form->textAreaControlGroup($model, 'skills', array('rows' => 6, 'span' => 8)); ?>
            <?php echo $form->textAreaControlGroup($model, 'summary', array('rows' => 6, 'span' => 8)); ?>
            <?php echo $form->textFieldControlGroup($model, 'desired_position', array('span' => 5, 'maxlength' => 255)); ?>
            <?php echo $form->checkBoxListControlGroup($model, 'job_locations_ids', CHtml::listData(CitiesList::model()->findAll(array('order' => 'city_name')), 'city_index', 'city_name')); ?>
            <?php echo $form->textAreaControlGroup($model, 'documents', array('rows' => 6, 'span' => 8)); ?>
            <?php echo $form->textAreaControlGroup($model, 'applicant_type', array('rows' => 6, 'span' => 8)); ?>
            <?php echo $form->checkBoxListControlGroup($model, 'assistance_ids', CHtml::listData(AssistanceTypes::model()->findAll(array('order' => 'id')), 'id', 'name')); ?>
            <?php echo $form->urlFieldControlGroup($model, 'cv_file', array('span' => 5, 'maxlength' => 255)); ?>
            <?php echo $form->textAreaControlGroup($model, 'recruiter_comments', array('rows' => 6, 'span' => 8)); ?>
            <?php echo $form->textFieldControlGroup($model, 'who_filled', array('span' => 5, 'maxlength' => 255)); ?>
            <?php echo $form->dropDownListControlGroup($model, 'status', $model->statusTypes, array('span' => 5)); ?>

            <div class="form-actions">
                <?php
                echo TbHtml::submitButton($model->isNewRecord ? 'Додати' : 'Зберегти', array(
                    'color' => TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_LARGE,
                ));
                ?>
            </div>

        <?php $this->endWidget(); ?>
        </div>