angular.module('com.module.bookings')
	.controller('CanceledCtrl', function($scope, ApiService, CoreService){
		$scope.loading = true;
        $scope.searchText = '';
        ApiService.find('bookings/canceled', localStorage.accessToken, function (response) {
            $scope.bookings = response.data;
            $scope.myOrder = '';
            $scope.myReverse = true;
            $scope.loading = false;
            $scope.orderMe = function (orderBy) {
                $scope.myOrder = orderBy;
                $scope.myReverse = ($scope.myOrder == orderBy) ? $scope.myReverse = !$scope.myReverse : $scope.myReverse = fasle;
            }

            $scope.viewby = 10;
            $scope.currentPage = 1;
            $scope.itemsPerPage = $scope.viewby;
            $scope.maxSize = 5;
            $scope.totalItems = $scope.bookings.length;
            $scope.totalPage = Math.ceil($scope.totalItems / $scope.itemsPerPage);
            $scope.setItemsPerPage = function (num) {
                $scope.itemsPerPage = num;
                $scope.currentPage = 1; //reset to first paghe
                $scope.totalPage = Math.ceil($scope.totalItems / $scope.itemsPerPage);
            };
            $scope.deleteBooking = function (id) {
                CoreService.confirm('Xác nhận', 'Bạn có thực sự muốn xóa', function () {
                    ApiService.deleteById('bookings', localStorage.accessToken, id, function () {
                        ApiService.find('bookings/canceled', localStorage.accessToken, function (response) {
                            CoreService.toastSuccess('Success!');
                            $scope.bookings = response.data;
                        })
                    })
                }, function () {

                })
            }
            $scope.onView = function (item) {
                $scope.viewItem = item;
                for(type in item.priceDetail){
                    var typePrices = item.priceDetail[type];
                    typePrices.total = 0;
                    for(typePaxs in typePrices){
                        var typePax = typePrices[typePaxs]
                        for(money in typePax){
                            typePrices.total += typePax[money].total;
                        }
                    }
                }
            }
        })
	})