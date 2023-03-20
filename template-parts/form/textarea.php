<? $input = $args['input'] ?>

<div class="form-control">
<label htmlFor="<? echo $input->name ?>"><? echo $input->label; ?></label>
    <textarea id="<? echo $input->name ?>"
     name="<? echo $input->name ?>" placeholder="<? echo $input->placeholder ?>" ></textarea>
</div>