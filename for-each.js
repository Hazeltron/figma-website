var drinksArray = [
    {
        name: "whiskey",
        type: "good",
        full: true,
        hangover: false,
    },
    {
        name: "beer",
        type: "good",
        full: false,
        hangover: false,
    },
    {
        name: "cocktails",
        type: "good",
        full: false,
        hangover: true,
    },
    {
        name: "gin",
        type: "false",
        full: true,
        hangover: true,
    },
     {
        name: "wine",
        type: "good",
        full: true,
        hangover: false,
    },
     {
        name: "rice-wine",
        type: "bad",
        full: false,
        hangover: true,
    },
 ]


drinksArray.forEach(function (drink){
    if(drink.full === false && drink.hangover != true && drink.type == "good"){
        console.log("We need more ", drink.name);
        }
    });

//filtering and making new arrays

var emptyDrinks = drinksArray.filter(function(drinks){
    return drinks.full == false;
});

console.log(emptyDrinks);

var goodDrinks = drinksArray.filter(function(drinks){
    return drinks.type == "good";
});

console.log(goodDrinks);


//printing to the page

function buildList(drinks, heading){

    var h2 = document.createElement("h2");
    h2.textContent = heading;
    document.body.appendChild(h2);

    
    var ol = document.createElement("ol");

        drinks.forEach( function(drink) {

            

            var li = document.createElement("li");
            li.textContent = drink.name;
            document.body.appendChild(li);
            ol.appendChild(li);
        });

    document.body.appendChild(ol);
}

buildList(goodDrinks, "These are good drinks:");

buildList(emptyDrinks, "86:");



var food = [
    {
        name: "blackened yellow fin tuna",
        coarse: "main",
        type: "fish",
        ingredients:[
            "black paper blackening", 
            "aoli", 
            "jumbalia", 
            "shallots",
            ],
        inStock: true,
        fishOfDay: false,   
    },
    {
        name: "calamari",
        coarse: "app",
        type: "squid",
        ingredients:[
            "breading", 
            "lime aoli", 
            "mango mojo chili", 
            ],
        inStock: true,
        fishOfDay: false,   
    },

    {
        name: "gumbo",
        coarse: "app",
        type: "soup",
        ingredients: [
            "rou", 
            "crayfish", 
            "shrimp", 
            "rice",
            "sausage",
            ],   
        
        inStock: true,

    },
    {
        name: "burger",
        coarse: "main",
        type: "sandwich",
        ingredients: [
            "beef paddy", 
            "tomato", 
            "onion", 
            "lettuce",
            "bun",
            ],  
        
        inStock: false,

    },
    {
        name: "salmon",
        coarse: "main",
        type: "fish",
        ingredients: [
            "salmon", 
            "dill creme", 
            "tots", 
            "asparagus",
            "arugula",
            ],   
        
        inStock: false,
        fishOfDay: false,

    },
    {
        name: "halibut",
        coarse: "main",
        type: "fish",
        ingredients: [
            "lentils", 
            "grana broth", 
            "zucchini", 
            "halibut",
            ],   
        
        inStock: true,
        fishOfDay: true,

    },

    ]


    var inStock = food.filter(function(items){
        return items.inStock === true;
        
    });

    var type = food.filter(function(items){
        return items.type === "fish";
    });

    var fishStock = food.filter(function(items){
        return items.inStock === true && items.type === "fish";
        
    });

    console.log(inStock);
    console.log(type);
    console.log(fishStock);

//print menu
    //look at the menu
    //we want to print the whole menu
    //we want to print what we are 86ed 
    //we want to print the fish of the day 
    function buildMenu(items, heading){
        var menuTitle = document.createElement("h2");
        menuTitle.textContent = heading;

        document.body.appendChild(menuTitle);
        
        items.forEach(function (item){
            if(item.inStock === true){
                var foodName = document.createElement("h3");
                foodName.textContent = item.name;
                var ingredients = document.createElement("p");
                ingredients.textContent = item.ingredients;
             

                document.body.appendChild(foodName);
                document.body.appendChild(ingredients);

            } else {
                return "Menu's broke."
            }

        });
            
    }

    buildMenu(inStock, "Our menu for tonight: ");



   




