import { Sprite } from '../base/Sprite.js'
import { Director } from '../Director.js'
export class Land extends Sprite {

    constructor() {
        const image = Sprite.getImage('land')
        super(image, 0, 0, image.width, image.height, 0, window.innerHeight - image.height, image.width, image.height);
        this.landX = 0;
         this.landSpeed = Director.getInstance().moveSpeed;
        //this.landSpeed = 2;
    }
    draw() {
        this.landX += this.landSpeed;
        if (this.landX > (this.img.width - window.innerWidth)) {
            this.landX = 0;
        }
        super.draw(this.img,
            this.srcx,
            this.srcy,
            this.srcw,
            this.srch,
            -this.landX,
            this.y,
            this.width,
            this.height
        );
    }
}