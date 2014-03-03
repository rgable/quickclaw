$(document).ready(function () { 
    var Pokemon = Backbone.Model.extend({}); 
    // #TODO: Prelowercasep okedex
    
    var PokedexCollection = Backbone.Collection.extend({
        model: Pokemon, 
    });
    Pokedex = new PokedexCollection();
    Pokedex.add(pokedexJson.pokedex)
    var SearchWidgetView = Backbone.View.extend({
        el : "#pokesearch", 
        initialize: function () { 
          this.searchBox = this.$('input');   
          this.resultsBox = this.$('#poke-search-results');
        },
        events: { 
            'submit form': 'doSearch',   
            'keyup input': 'doAutoSearch', 
        },
        doSearch: function () { 
            
        },
        doAutoSearch: function () { 
            var searchText = this.searchBox.val().toLowerCase();
            console.log(searchText);
            var pokeResults = Pokedex.filter(function (pokemon) {
                //console.log(pokemon.get('name').substr(0, searchText.length) + " vs " + searchText);
                return (pokemon.get('name').toLowerCase().substr(0, searchText.length) == searchText);
            }); 
            console.log(pokeResults);
            this.resultsBox.html(ich.searchResult(pokeResults[0].toJSON() ));
        }
    }); 
    var SearchWidget = new SearchWidgetView(); 
}); 