var app = angular.module('MyApp', [])

app.controller('MyController', function ($scope, $http) {
    $scope.UpdateElection = function () {
       	 if (typeof ($scope.ElectionStatus) != "undefined") {
            	var Estatus;
            	var request=$http({
	            method: 'POST',
	            url: 'sUser.php',
	            data: {
	                Estatus: $scope.ElectionStatus
	            }
	        })
	        request.then(function(response){
	        	console.log(response);
	        });    
        } else {
           console.log("RadioButtons are not checked.");
        }
	};		
			
    $scope.CreateTable = function () {
       	 if (typeof ($scope.TName) != "undefined") {
            	//var Bstatus;
            	var tableName;
            	var request=$http({
	            method: 'POST',
	            url: 'sssUser.php',
	            data: {
	                //Bstatus: $scope.AddNewBatch,
	                tableName: $scope.TName
	            }
	        })
	        request.then(function(response){
	        	console.log(response);
	        });    
        } else {
           console.log("Name not Entered");
        }
	};



        //      	$http({
		//    method: 'GET',
		//    url: 'api/get.php'
		// }).then(function (response) {
		//    // code to execute in case of success
		// }, function (response) {
		//    // code to execute in case of error
		// });
    $scope.UpdateBatch = function () {
       	 if (typeof ($scope.AddNewBatch) != "undefined") {
            	var Bstatus;
            	//var tableName;
            	var request=$http({
	            method: 'POST',
	            url: 'ssUser.php',
	            data: {
	                Bstatus: $scope.AddNewBatch
	                //tableName: $scope.TName
	            }
	        })
	        request.then(function(response){
	        	console.log(response);
	        });    
        } else {
           console.log("RadioButtons are not checked.");
        }
	};

});