import { NodeCompatibleEventEmitter } from "rxjs/internal/observable/fromEvent";

export interface MyWorker{
    name:string;
    surname:string;
    type:number;
    id?:number;
}

export enum MyWorkerType{
    programmer,
    designer,
    copywriter,
    manager,

}

export let MyWorkerDatabase:MyWorker[]=[
    {id: 1,name:'Иван',surname:'Иванов',type:0},
    {id: 2,name:'Петр',surname:'Петров',type:1},
    {id: 3,name:'Марк',surname:'Марков',type:2},
    {id: 4,name:'Дима',surname:'Макаров',type:3},
    
];