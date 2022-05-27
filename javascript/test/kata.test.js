const { analyse } = require('../src/kata');

describe("Kata", function () {
  it("Nombre cuadra con analayse", function () {
   var result = analyse();
      expect(result).toBe(true);
  });
});
