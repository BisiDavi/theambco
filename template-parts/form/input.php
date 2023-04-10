<? 
    $input = $args['input'];
    $inputType = $args['type'] ?  $args['type'] : "text";
?>
<div class="col-6">
    <label htmlFor="<? echo $input['name']; ?>"><? echo $input['label']; ?></label>
    <input 
        id="<? echo  $input['name']; ?>" 
        name="<? echo $input['name']; ?>"
        placeholder="<? echo $input['placeholder']; ?>" 
        type="<? echo $inputType; ?>"
        class="form-control" 
    ></input>
</div>