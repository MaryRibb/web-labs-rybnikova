var Person = /** @class */ (function () {
    function Person(firstName, lastName, age, ssn) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.age = age;
    }
    return Person;
}());
var p = new Person("Иван", "Иванов", 45, "123-90-4567");
console.log("Last name: " + p.lastName + " SSN: ");
var User = /** @class */ (function () {
    function User(id) {
        this._id = id;
    }
    User.prototype.getId = function () {
        return this._id;
    };
    return User;
}());
var tom = new User(3);
console.log(tom.getId()); // возвращает number
var alice = new User("str");
