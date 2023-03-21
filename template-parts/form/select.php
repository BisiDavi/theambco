<? $input = $args['input'] ?>

<div class="col-12 d-flex flex-column">
    <label htmlFor="<? echo $input['name']; ?>"><? echo $input['label']; ?></label>
    <select 
        id="<? echo  $input['name']; ?>" 
        name="<?  $input['name']; ?>"
        placeholder="<? echo  $input['placeholder']; ?>"
        class="form-control"  
    >
    <? foreach ($input['options'] as $key => $option) { ?>
            <option value="<? echo $option; ?>"><? echo $option; ?> </option>
    <? } ?>
</select>
</div>