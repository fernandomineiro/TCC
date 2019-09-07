var app = angular.module("mem_app", []);
app.controller("controller", function($scope, $http) {
    $scope.action = function() {
        if ($scope.firstname == null) {
            alert("Please input Firstname");
        } 
        else if ($scope.lastname == null) {
            alert("Please input Lastname");
        }  
        else {
            $http.post(
                "action.php", {
                    'firstname': $scope.firstname,
                    'lastname': $scope.lastname,
                    'btnName': $scope.btnName,
                    'memberid': $scope.memberid,
                }
            ).success(function() {
                $scope.firstname = null;
                $scope.lastname = null;
                $scope.btnName = "Save";
                $scope.icon = "fa fa-save";
                $scope.btnClass = "btn btn-primary";
                $scope.showdata();
            });
        }
    }
    $scope.showdata = function() {
        $http.get("fetch.php")
            .success(function(data) {
                $scope.member = data;
            });
    }
    $scope.insert = function() {
        $scope.firstname = null;
        $scope.lastname = null;
        $scope.title = "Add pessoa";
        $scope.btnName = "Salvar";
        $scope.icon = "fa fa-save";
        $scope.btnClass = "btn btn-primary";
    }
    $scope.update = function(memberid, firstname, lastname) {
        $scope.memberid = memberid;
        $scope.firstname = firstname;
        $scope.lastname = lastname;
        $scope.title = "Editar pessoa";
        $scope.icon = "fa fa-check-square-o";
        $scope.btnClass = "btn btn-success";
        $scope.btnName = "Update";
    }
    $scope.delmem = function(memberid) {
        $scope.delmember = memberid;
    }
    $scope.delete = function() {
        $http.post("delete.php", {
            'memberid': $scope.delmember,
        }
        ).success(function(data) {
            $scope.showdata();
        });
    } 
    $scope.enter = function(keyEvent) {
        if (keyEvent.which === 13){
            action();
        }
    }
});
