import { ResourceLoder } from './js/base/ResourceLoder.js';
import { Director } from './js/Director.js'
import { DataStore } from './js/base/DataStore.js';
import { BackGround } from './js/runtime/BackGround.js';
import { Land } from './js/runtime/Land.js';



export class Main {
    constructor() {
        this.canvas = wx.createCanvas()
        this.ctx = this.canvas.getContext('2d');
        const loader = ResourceLoder.create();
        this.Director = Director.getInstance();
        this.dataStore = DataStore.getInstance(); // 对象的引用 不是复制
        loader.result = 'result';
        loader.onloader(map => this.onFirstLoader(map))
    }
    onFirstLoader(map) {
        this.dataStore.ctx = this.ctx;
        this.dataStore.res = map;
        this.init();
    }
    init() {
        this.dataStore
        .then('background', new BackGround())
        .then('land', new Land())
        .then('pencils',[])
        // background.draw();  createPencil
        this.Director.createPencil();  // 游戏运行前创建
        // this.Director.getInstance().run('run');
        this.Director.run('run');
    }

}

