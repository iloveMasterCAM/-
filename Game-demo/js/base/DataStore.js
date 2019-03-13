//管理缓存文件
export class DataStore{
    static getInstance(){
       
        if(!DataStore.instance){
            DataStore.instance = new DataStore();
        }
        return DataStore.instance;
    }
    constructor(){
        this.map = new Map();
       
    }
    then(key,val){
        this.map.set(key,val);
        return this;
    }
    get(key){
        return this.map.get(key);
    }
   
    del(){
        for(let val of this.map.values()){
            val = null;
        }
    }
}