'use strict';
/**
 * Created by Majd on 3/31/2014.
 */

ngLara.controller('UserCtrl', function ($scope, $rootScope, $modal, User) {

    $scope.selectAllCheckbox = false;


    $scope.getAllUsers = function () {
        User.getAll()
        .success(function(data) {
            $rootScope.usersList = data;
        });
    };

    $scope.getUser = function (id) {
        /*User.get(id)
        .success(function(data) {
            if (data.role == 'admin') {
                data.role_admin = 'selected';
            } else {
                data.role_user = 'selected';
            }
            $rootScope.user = data;
        });*/
        
        for (var i = 0; i < $rootScope.usersList.length; i++) {
            if (id == $rootScope.usersList[i].id) {
                $rootScope.user = $rootScope.usersList[i];
            };
        };
    };

    $scope.addUser = function () {

        var role = 'User';
        
        var user = 
        {
            id: $rootScope.usersList.length+1,
            username: $scope.newUser.username,
            name: $scope.newUser.name,
            password: $scope.newUser.password,
            role: role
        }

        $rootScope.usersList.push(user);

    };

    $scope.updateUser = function () {

        //code here........
        
    };

    $scope.deleteSelectedUsers = function () {
        

        var newArray = [];

        for (var i = 0; i < $rootScope.usersList.length; i++){
            if (!$rootScope.usersList[i].selected) {
                newArray.push($rootScope.usersList[i]);
            }
        };

        $rootScope.usersList = newArray;
    };

    $scope.toggleAllCheckboxes = function () {

        console.log('selectall = ' + $scope.selectAllCheckbox);

        if ($scope.selectAllCheckbox) {

            $rootScope.usersList.forEach(function(entry) {
                entry.selected = false;
            });

        } else {

            $rootScope.usersList.forEach(function(entry) {
                entry.selected = true;
            });

        }
    };


    
    var addUserModal = $modal(
        {
            title: 'Add User', 
            contentTemplate : 'templates/subtemplates/addUser.html',
            animation:'am-flip-x',
            show: false
        }
    );

    var editUserModal = $modal(
        {
            title: 'Edit User', 
            contentTemplate : 'templates/subtemplates/editUser.html',
            animation:'am-flip-x',
            show: false
        }
    );

    $scope.showAddUserForm = function(){
        addUserModal.show();
    };

    $scope.showEditUserForm = function(userId){
        $scope.getUser(userId);
        editUserModal.show();
    };

});