var Animal = function(name,age){
    this.name  = name;
    this.age = age
  
}
Animal.prototype.say = function(){
    console.log(this.name+'----'+this.age)
}

var Cat = function (name,age){
    Animal.apply(this,arguments)
}

Cat.prototype = Object.create(Animal.prototype);
Cat.prototype.say = function(){
    console.log('子类'+this.name)
}
var cat1 = new Cat('小米',3);
cat1.say();

// var cat = new animal('小猫',3)
// cat.say()
