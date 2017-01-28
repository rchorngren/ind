var Hangman = {

    init: function () {
        this.cacheDom();
        this.bindEvents();
        this.renderButtons();
        this.renderVisibleWord();
        // this.randomWord();
    },

    cacheDom: function () {
        this.$el = $('#hangman');
        this.$buttons = this.$el.find('#buttons');
        this.$chars = this.$el.find('.charButtons');
        this.$visibleWord = this.$el.find('#visibleWord');
        this.$pic = this.$el.find('#pic');
        this.$end = this.$el.find('#end');
    },

    bindEvents: function () {
        $(document).on('click', '.charButtons', this.guessChar);
    },

    renderButtons: function () {
        var charButtons = '';
        this.chars.map((x) => {
            charButtons += `<button class='charButtons'><span class='chars'>${x}</span></button>`;
        })
        this.$buttons.html(charButtons);
    },

    renderVisibleWord: function () {
        this.currentWord = this.randomWord().split('');
        for (var i = 0; i < this.currentWord.length; i++) {
            this.visibleWord.push('_');
        }
        this.$visibleWord.html(this.visibleWord);
        console.log(this.visibleWord, this.currentWord);
    },

    reRenderVisibleWord: function () {
        this.$visibleWord.html(this.visibleWord);
    },

    randomWord: function () {
        return this.words[Math.floor(Math.random() * this.words.length)];
    },

    guessChar: function () {
        self = Hangman;
        var guessedChar = $(this).children().html();
        $(this).css('visibility', 'hidden');
        self.checkChar(guessedChar);
    },

    checkChar: function (guessedChar) {
        var correctLetter = [];
        for (var i = 0; i < this.currentWord.length; i++) {
            if (guessedChar == this.currentWord[i]) {
                this.visibleWord[i] = guessedChar;
                correctLetter.push(guessedChar);
            }
        }
        if (correctLetter.length == 0) {
            this.lives--;
        }
        this.reRenderVisibleWord();
        this.switchPic();
        this.isDone();
    },

    switchPic: function () {
        switch (this.lives) {
            case 10: this.$pic.attr('src', './hangman/img/hang.jpg'); break;
            case 9: this.$pic.attr('src', './hangman/img/hang1.jpg'); break;
            case 8: this.$pic.attr('src', './hangman/img/hang2.jpg'); break;
            case 7: this.$pic.attr('src', './hangman/img/hang3.jpg'); break;
            case 6: this.$pic.attr('src', './hangman/img/hang4.jpg'); break;
            case 5: this.$pic.attr('src', './hangman/img/hang5.jpg'); break;
            case 4: this.$pic.attr('src', './hangman/img/hang6.jpg'); break;
            case 3: this.$pic.attr('src', './hangman/img/hang7.jpg'); break;
            case 2: this.$pic.attr('src', './hangman/img/hang8.jpg'); break;
            case 1: this.$pic.attr('src', './hangman/img/hang9.jpg'); break;
            case 0: this.renderLoseScreen(); break;
            default: break;
        }
    },

    isDone: function () {
        var done = [];
        for (var i = 0; i < this.visibleWord.length; i++) {
            if (this.visibleWord[i] == '_') {
                done.push(i);
            }
        }
        if (done.length == 0) {
            this.renderWinScreen();
            // this.$el.html(`DU VANN! <br> Ordet var ${this.visibleWord}`);
        }
    },

    renderWinScreen: function () {
        this.$buttons.css('display', 'none');
        this.$end.html('Grattis, du vann!');
    },

    renderLoseScreen: function () {
        this.$buttons.css('display', 'none');
        this.$end.html(`Du dog... Ordet var ${this.currentWord.join('')}`);
    },

    currentWord: [],

    visibleWord: [],

    lives: 10,

    words: ['FULKOD'],

    chars: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
            'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'Å', 'Ä', 'Ö']

}

Hangman.init();