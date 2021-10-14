<form name="mainForm" ng-submit="submitForm()">
    <div class="form-group has-feedback" ng-class="{'has-error': mainForm.project_id.$dirty && mainForm.project_id.$invalid}">
        <label>Project <span class="text-danger">*</span></label>
        <select class="form-control select2" name="project_id" ng-model="payload.project_id" required>
            <option value=""></option>
            <option ng-repeat="project in projects" value="@{{ project.id }}">
                @{{ project.name }}
            </option>
        </select>
        <div class="invalid-feedback has-error" ng-show="mainForm.project_id.$dirty && mainForm.project_id.$invalid">
            <div ng-show="mainForm.project_id.$error.required">project is required</div>
        </div>
    </div>

    <div class="form-group has-feedback" ng-class="{'has-error': mainForm.via.$dirty && mainForm.via.$invalid}">
        <label>Via <span class="text-danger">*</span></label>
        <select class="form-control select2" name="via" ng-model="payload.via" required>
            <option value=""></option>
            <option value="stopwatch">Stopwatch</option>
            <option value="manually">Manually</option>
        </select>
        <div class="invalid-feedback has-error" ng-show="mainForm.via.$dirty && mainForm.via.$invalid">
            <div ng-show="mainForm.via.$error.required">via is required</div>
        </div>
    </div>

    <div class="mb-4" ng-if="payload.via == 'stopwatch'"  ng-click="stopwatchInit()">
        <h1 id="stopwatch-time"><time>00:00:00</time></h1>
        <button class="btn btn-success" type="button" id="start">start</button>
        <button class="btn btn-danger" type="button" id="stop">stop</button>
        <button class="btn btn-info" type="button" id="clear">clear</button>
    </div>

    <div ng-if="payload.via == 'manually'"
        class="form-group has-feedback"
        ng-class="{'has-error': mainForm.time.$dirty && mainForm.time.$invalid}">
        <label>Time <span class="text-danger">*</span></label>
        <input class="form-control" name="time" ng-model="payload.time" required 
               placeholder="type in this format hh:mm like: 05:30 .. this is now 5H 30M">
        <div class="invalid-feedback has-error" ng-show="mainForm.time.$dirty && mainForm.time.$invalid">
            <div ng-show="mainForm.time.$error.required">time is required</div>
        </div>
    </div>

    <div class="form-group">
        <label>Comment</label>
        <textarea class="form-control hp-60" name="comment" ng-model="payload.comment"></textarea>
    </div>

    <button type="submit" class="btn btn-primary" ng-disabled="mainForm.$invalid">Submit</button>
</form>

<script>
    var selected_project_id = '{{ request()->project_id ?? '' }}'
</script>
