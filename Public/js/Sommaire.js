class Sommaire {
    constructor() {
        this.ouvrirSommaire();
        this.fermerSommaire();
    }

    ouvrirSommaire() {
        document.getElementById("sommaire").addEventListener("click", function(e) {
            document.getElementById("mySidenav").style.width = "250px";
        });
    }
    fermerSommaire() {
        document.getElementById("fermerSommaire").addEventListener("click", function(e) {
            document.getElementById("mySidenav").style.width = "0";
        });
    }
}

let SommaireObj = new Sommaire();