import { DataStore } from "./DataStore.js"
export class Sprite {
    constructor(
        img = null,
        srcx = null,
        srcy = null,
        srcw = null,
        srch = null,
        x = 0,
        y = 0,
        width = 0,
        height = 0) {
        this.datastore = DataStore.getInstance();
        this.ctx = this.datastore.ctx;
        this.img = img;
        this.srcx = srcx;
        this.srcy = srcy;
        this.srcw = srcw;
        this.srch = srch;
        this.x = x;
        this.y = y;
        this.width = width;
        this.height = height;
    }

    /* 


    */

    draw(
        img = this.img,
        srcx = this.srcx,
        srcy = this.srcy,
        srcw = this.srcw,
        srch = this.srch,
        x = this.x,
        y = this.y,
        width = this.width,
        height = this.height,
    ) {
        this.ctx.drawImage(
            img,  // image 对象
            srcx, // 要裁剪的起始x
            srcy,// 要裁剪的起始y
            srcw, //要裁剪的宽
            srch,//要裁剪的高
            x, //放置的的x
            y, //放置的的y
            width,  // 要使用的宽
            height // 要使用的高
        );

    }
    static getImage(key) {
        return DataStore.getInstance().res.get(key)
    }
}