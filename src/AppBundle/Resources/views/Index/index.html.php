<?php $view->extend('AppBundle::layout.html.php'); ?>
<div layout="row">
    <md-content layout="column" flex id="sourceBox">
        <md-select flex placeholder="Pick" ng-model="sourceLanguage" ng-change="getRules()">
            <md-option ng-repeat="language in languages" value="{{language.value}}">{{language.label}}</md-option>
        </md-select>
        <textarea ng-model="sourceText" ng-change="transcribe()"></textarea>
    </md-content>
    <md-content layout="column" flex id="targetBox">
        <md-select flex placeholder="Pick" ng-model="targetLanguage" ng-change="getRules()">
            <md-option ng-repeat="language in languages" value="{{language.value}}">{{language.label}}</md-option>
        </md-select>
        <textarea ng-model="targetText"></textarea>
    </md-content>
</div>