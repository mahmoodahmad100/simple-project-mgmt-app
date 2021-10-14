<form name="mainForm" ng-submit="submitForm()">
    <div class="form-group has-feedback" ng-class="{'has-error': mainForm.name.$dirty && mainForm.name.$invalid}">
        <label>Name <span class="text-danger">*</span></label>
        <input class="form-control" name="name" ng-model="payload.name" required>
        <div class="invalid-feedback has-error" ng-show="mainForm.name.$dirty && mainForm.name.$invalid">
            <div ng-show="mainForm.name.$error.required">name is required</div>
        </div>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control hp-60" name="description" ng-model="payload.description"></textarea>
    </div>

    <div class="form-group">
        <label>Deadline</label>
        <input class="form-control datepicker" name="deadline" ng-model="payload.deadline">
    </div>

    <button type="submit" class="btn btn-primary" ng-disabled="mainForm.$invalid">Submit</button>
</form>
