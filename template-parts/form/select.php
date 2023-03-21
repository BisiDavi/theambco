<? $input = $args['input'] ?>

<div class="col-12 d-flex flex-column">
    <label htmlFor="<? echo $input['name']; ?>"><? echo $input['label']; ?></label>
    <select 
        id="<? echo  $input['name']; ?>" 
        name="<?  $input['name']; ?>"
        class="form-control"  
    >
    <? foreach ($input['options'] as $key => $option) { ?>
            <option value="<? echo $option; ?>" class="py-2"><? echo $option; ?> </option>
    <? } ?>
</select>
</div>