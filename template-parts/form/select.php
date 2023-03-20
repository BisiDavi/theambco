<? $input = $args['input'] ?>

<div class="form-control">
    <label htmlFor="<? echo $input->name ?>"><? echo $input->label; ?></label>
    <select 
        id="<? echo $input->name; ?>" 
        name="<? echo $input->name ?>"
        placeholder="<? echo $input->placeholder ?>"  
    >
    <? foreach ($input->options as $key => $option) { ?>
            <option value="<? echo $option; ?>"><? echo $option; ?> </option>
    <? } ?>
</select>
</div>