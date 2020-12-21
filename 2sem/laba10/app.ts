class Person {
    public firstName: string;
    public lastName: string;
    public age: number;
   

    constructor(firstName: string, lastName: string, age: number, ssn: string) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.age = age;
       
    }
}
let p = new Person("Иван", "Иванов", 45, "123-90-4567");
console.log("Last name: " + p.lastName + " SSN: " ); 
class User<T> {

    private _id: T;
    constructor(id: T) {

        this._id = id;
    }
    getId(): T {

        return this._id;
    }
}

let tom = new User<number>(3);
console.log(tom.getId()); // возвращает number

let alice = new User<string>("str");
