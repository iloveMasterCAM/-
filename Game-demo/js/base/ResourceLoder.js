// 文件加载器  确保canvas在图片渲染完成后渲染
import { Resourecs } from './Resourecs.js';
export class ResourceLoder { //导出模块/类

    constructor() {
        this.map = new Map(Resourecs);
        //   console.log(this.map);
      
        for (let [key, val] of this.map) {
          
            const image = wx.createImage();
            image.src = val;
            this.map.set(key, image);
        }

    }
    onloader(callback) {
        let count = 0;
        for (let val of this.map.values()) {
            val.onload = () => {
                count ++;
                if(count >= this.map.size){
                    callback(this.map)
                }
            }
           
        }
    }
    static create(){
        return new ResourceLoder();
    }


}