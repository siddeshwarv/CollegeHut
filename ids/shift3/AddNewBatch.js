var app = angular.module('Batch', [])
app.controller('AddBatch', function ($scope, $http) {
	$http.get("AddNewBatch2.php")
	.then(function(response){$scope.tlist=response.data.records;});
	
	$scope.selectedd = function(){
	if($scope.Tlist!=undefined)
		console.log($scope.Tlist);
	};

	$scope.Insertdata = function(){
	    	var tableName;
	    	var RollNo;
	    	var Name;
	    	var Branch;
	    	var Hostel;
	    	var RoomNo;
	    	var PhoneNo;
	    	var GName;
	    	var GPhoneNo;
	    	var GPhoneNo;
	    	var Password;
	    	console.log("Inserting data");
	    	var request=$http({
            method: 'POST',
            url: 'AddNewBatch.php',
            data: {
                tableName: $scope.Tlist,
            	RollNo: $scope.RollNo,
            	Name: $scope.Name,
            	Branch: $scope.Branch,
            	Hostel: $scope.Hostel,
            	RoomNo: $scope.RoomNo,
            	PhoneNo: $scope.PhoneNo,
            	GName: $scope.GName,
            	GPhoneNo: $scope.GPhoneNo,
            	Password: $scope.Password
            }
        })
        request.then(function(response){
        	console.log(response);
        });    
    };


	
	
});

