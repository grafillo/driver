
1 php artisan migrate
2 php artisan db:seed

Везде статус 200 если успешно и 400 или 404 если не успешно

Route::get('/car/all' - выводит весь список автомобилей
Route::post('/car/add',  - добавляет новую  машину,  обязательные поля car:string,number:string
Route::get('/car/show/{id}',  - показывает одну машину с айди указанным в урл
Route::put('/car/setdriver',  - садит за руль водителя обязательные поля id:int, driver_id:int
Route::delete('/car/{id}',  - удаляет машину с айди указанным в урл
Route::get('/car/free',  показывает список свободных авто

Route::get('/driver/all',  - список всех водителей
Route::post('/driver/add',  - добавляет нового водителя name:string, phone:string
Route::get('/driver/show/{id}',  - показывает водителя с айди указанным в урл и если есть машину в которой сидит
Route::delete('/driver/{id}', - удаляет водителя с айди указанным в урл
