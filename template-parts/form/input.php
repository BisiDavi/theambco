<? $input = $args['input'] ?>

<div class="form-control">
    <label htmlFor=""><? echo $input->label; ?></label>
    <input 
        id="<? echo $input->name; ?>" 
        name="<? echo $input->name ?>"
        placeholder="<? echo $input->placeholder ?>"  
    ></input>
</div>