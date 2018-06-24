var module = angular.module("log",[]);
//module.controller("Ctrl3",main);
module.controller("Ctrl2",function($scope,$http){

  $scope.contact_name;
  $scope.vari = false;
  $scope.new_var;
  $scope.vari3 = false;  

    $scope.getPeople = function() {
          $http({
              
              method: 'GET',    
              url: 'php_login/2.php'
              
          }).then(function (response) {
              
              $scope.contact_name = response.data;
              if($scope.contact_name==0){
                $scope.vari = true;
                $scope.vari3 = true;
                $scope.new_var = 1;
              }
              else{
                $scope.vari = false;
                $scope.vari3 = false;
                console.log("wdqd");
                $scope.new_var = 1;
              }
              
          }, function (response) {
              console.log(response.data,response.status);           
          });
      return $scope.vari;
    };
  $scope.vari = $scope.getPeople();

  $scope.getPeople2 = function() {
          $http({
              
              method: 'GET',    
              url: 'php_login/21.php'
              
          }).then(function (response) {
              
              console.log(response.data);
              $scope.vari2 = response.data;
              
          }, function (response) {
              console.log(response.data,response.status);           
          });
      return $scope.vari2;
    };
    $scope.vari2 = $scope.getPeople2();
    console.log(check_by);


    console.log($scope.vari)
    $scope.clicked = function(){
    console.log("DSF");
    }
});





// function main($scope){
//   //$scope.namec = "sdw";
//   $scope.namec;
//   console.log($scope.namec);
//   //console.log($scope.variable);
// }




//to display name in logged in