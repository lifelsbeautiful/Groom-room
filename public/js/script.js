function start(f) {
  /in/.test(document.readyState) ? setTimeout("start(" + f + ")", 9) : f();
}
start(function () {
  var app = new Vue({
    el: ".ret",
    data() {
      return {
        znachName: "",
        znachService: "",
        znachEmail: "",
        znachPassword: "",
        standart: "In process",
        projects: [
          {
            img: "public/img/dog.png",
            nickname: "Barny",
            service: "Washing",
            stage: "Complete",
          },
          {
            img: "public/img/dog.png",
            nickname: "Glorya",
            service: "Pedicure",
            stage: "Complete",
          },
          {
            img: "public/img/dog.png",
            nickname: "Jack",
            service: "Haircut",
            stage: "Complete",
          },
          {
            img: "public/img/dog.png",
            nickname: "Rudy",
            service: "Washing",
            stage: "Complete",
          },
          {
            img: "public/img/dog.png",
            nickname: "Marti",
            service: "Pedicure",
            stage: "Complete",
          },
        ],
      };
    },
    methods: {
      vhodName(event) {
        this.znachName = event.target.value;
      },
      vhodService(event) {
        this.znachService = event.target.value;
      },
      submissionForm() {
        if (this.znachName === "" && this.znachService === "") {
          return;
        }
        this.projects.push({
          nickname: this.znachName,
          service: this.znachService,
          stage: this.standart,
        });
      },
      vhodEmail(event) {
        this.znachEmail = event.target.value;
      },
      vhodPassword(event) {
        this.znachPassword = event.target.value;
      },
      consoleConclusion() {
        console.log(
          `email: ${this.znachEmail} password: ${this.znachPassword}`
        );
      },
    },
  });
});
