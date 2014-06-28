<div class="panel panel-default">
    <div class="panel-heading"><?php echo Yii::t('AdminModule.base', '<strong>Manage</strong> groups'); ?></div>
    <div class="panel-body">

        <?php echo HHtml::link("Create new group", array('//admin/group/edit'), array('class' => 'btn btn-primary')); ?>
        <br>


        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'groups-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'itemsCssClass' => 'table table-hover',
            /*'loadingCssClass' => 'loader',*/
            'columns' => array(
                array(
                    'name' => 'name',
                    'header' => Yii::t('AdminModule.group', 'Group name'),
                    'filter' => CHtml::activeTextField($model, 'name', array('placeholder' => Yii::t('AdminModule.group', 'Search for group name'))),
                ),
                array(
                    'name' => 'description',
                    'header' => Yii::t('AdminModule.group', 'Description'),
                    'filter' => CHtml::activeTextField($model, 'description', array('placeholder' => Yii::t('AdminModule.group', 'Search for description'))),
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{update}',
                    'updateButtonUrl' => 'Yii::app()->createUrl("//admin/group/edit", array("id"=>$data->id));',
                    'buttons' => array
                    (

                        'update' => array
                        (
                            'label' => '<i class="fa fa-pencil"></i>',
                            'imageUrl' => false,
                            'options' => array(
                                'class' => 'btn btn-primary btn-xs tt',
                                'data-toggle' => 'tooltip',
                                'data-placement' => 'top',
                                'title' => '',
                                'data-original-title' => 'Edit group',
                            ),
                        ),
                    ),
                ),
            ),
            'pager' => array(
                'class' => 'CLinkPager',
                'maxButtonCount' => 5,
                'nextPageLabel' => '<i class="fa fa-step-forward"></i>',
                'prevPageLabel' => '<i class="fa fa-step-backward"></i>',
                'firstPageLabel' => '<i class="fa fa-fast-backward"></i>',
                'lastPageLabel' => '<i class="fa fa-fast-forward"></i>',
                'header' => '',
                'htmlOptions' => array('class' => 'pagination'),
            ),
            'pagerCssClass' => 'pagination-container',
        ));
        ?>

    </div>
</div>
