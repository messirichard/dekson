
<?php 
$criteria = new CDbCriteria;
$criteria->with = array('description');
$criteria->addCondition('t.type = :type');
$criteria->params[':type'] = 'category';
$criteria->order = 't.sort ASC';
$filterCat_par = PrdCategory::model()->findAll($criteria);

// material products
$criteria = new CDbCriteria;
$criteria->select = 't.material';
$criteria->group = 'material';
$data_filters_material = ViewProducts::model()->findAll($criteria);

// material products
$criteria = new CDbCriteria;
$criteria->select = 't.finishing';
$criteria->group = 'finishing';
$data_filters_finishs = ViewProducts::model()->findAll($criteria);
?>

<!-- KURANG FORM -->
<div class="prelatife container">
    <section class="block-top-filterblue p-5">
        <h3 class="text-center">Find Dekkson Products</h3>
        <div class="py-1"></div>
        <form method="get" action="<?php echo CHtml::normalizeUrl(array('/product/index')); ?>">
            <div class="row no-gutters justify-content-center">
                <div class="col">
                      <div class="form-group">
                        <label for="exampleIn1">Accessories type</label>
                        <select name="type" id="" class="form-control">
                            <option value="">All</option>
                            <?php foreach ($filterCat_par as $key => $value): ?>
                            <option value="<?php echo $value->id ?>"><?php echo ucwords($value->description->name) ?></option>
                            <?php endforeach ?>
                        </select>
                      </div>
                </div>
                <div class="col">
                      <div class="form-group">
                        <label for="exampleIn1">Material</label>
                        <select name="material" id="" class="form-control">
                            <option value="">Choose Material</option>
                            <?php foreach ($data_filters_material as $key => $value): ?>
                            <option value="<?php echo $value->material ?>"><?php echo $value->material ?></option>
                            <?php endforeach ?>
                        </select>
                      </div>
                </div>
                <div class="col">
                      <div class="form-group">
                        <label for="exampleIn1">Finishing</label>
                        <select name="finishing" id="" class="form-control">
                            <option value="">Choose Finishing</option>
                            <?php foreach ($data_filters_finishs as $key => $value): ?>
                            <option value="<?php echo $value->finishing ?>"><?php echo $value->finishing ?></option>
                            <?php endforeach ?>
                        </select>
                      </div>
                </div>
                <div class="col">
                      <div class="form-group">
                        <label for="exampleIn1">Keyword / Item Code</label>
                        <input type="text" name="q" class="form-control">
                      </div>
                </div>
                <div class="col col-md-2 col-6">
                    <div class="form-group lasts">
                        <label for="exampleIn1" class="n_hide">&nbsp;</label>
                        <button type="submit" class="btn btn-info d-block"><i class="fa fa-search"></i></button>
                      </div>
                </div>
            </div>
          </form>
        <div class="clear"></div>
    </section>
    <div class="py-3 my-2"></div>
</div>
