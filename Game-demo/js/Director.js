
import { DataStore } from './base/DataStore.js';
import { UpPencil } from './runtime/UpPencil.js';
import { DownPencil } from './runtime/DownPencil.js'
// 导演类 控器器
export class Director {

    static getInstance() {
        if (!Director.instance) {
            Director.instance = new Director();
        }
        return Director.instance
    }
    constructor() {
        this.dataStore = DataStore.getInstance();
        this.moveSpeed = 2;
    }

    createPencil() {

        const mintop = window.innerHeight / 8;
        const maxtop = window.innerHeight / 2;
        const top = mintop + Math.random() * (maxtop - mintop);
        this.dataStore.get('pencils').push(new UpPencil(top))
        this.dataStore.get('pencils').push(new DownPencil(top))
    }
    run() {
        let pencilds = this.dataStore.get('pencils')
        this.dataStore.get('background').draw();

        this.dataStore.get('pencils').forEach((val) => {
            // console.log(val.x) 0+
            val.draw();
        })
     //   console.log((window.innerWidth+pencilds[0].width)/2)
       
       
        
      
        if ((pencilds[0].x + pencilds[0].width) < 0) {
            console.log('end')
            this.dataStore.get('pencils').shift()
            this.dataStore.get('pencils').shift()
           
        }
        if(pencilds[0].x + pencilds[0].width/2 <  window.innerWidth /2 && pencilds.length <4){
            this.createPencil()
        }

        this.dataStore.get('land').draw();
        let timer = requestAnimationFrame(() => this.run());
        this.dataStore.then('timer', timer);
    }
}