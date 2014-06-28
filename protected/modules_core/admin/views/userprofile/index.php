<div class="panel panel-default">
    <div class="panel-heading"><?php echo Yii::t('AdminModule.base', '<strong>Manage</strong> user profiles'); ?></div>
    <div class="panel-body">

        <?php echo HHtml::link('Add new category', $this->createUrl('//admin/userprofile/editCategory'), array('class' => 'btn btn-primary')); ?>

        <?php echo HHtml::link('Add new field', $this->createUrl('//admin/userprofile/editField'), array('class' => 'btn btn-primary')); ?>

        <hr>

        <ul>
            <?php foreach (ProfileFieldCategory::model()->findAll(array('order' => 'sort_order')) as $category): ?>
            <li>
                <a href="<?php echo $this->createUrl('editCategory', array('id' => $category->id)); ?>">Category: <?php echo $category->title; ?></a>
                <ul>
                    <?php foreach (ProfileField::model()->findAllByAttributes(array('profile_field_category_id' => $category->id), array('order' => 'sort_order')) as $field) : ?>
                        <li>
                            <a href="<?php echo $this->createUrl('editField', array('id' => $field->id)); ?>">Field: <?php echo $field->title; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endforeach; ?>
        </ul>

    </div>
</div>
