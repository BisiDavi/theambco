<? $input = $args['input'] ?>

<div class="col-12" >
<label htmlFor="<? echo $input['name']; ?>"><? echo  $input['label']; ?></label>
    <textarea id="<? echo  $input['name']; ?>"
    class="form-control"
     name="<? echo  $input['name']; ?>" placeholder="<? echo  $input['placeholder']; ?>" ></textarea>
</div>