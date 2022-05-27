const { analyse } = require('../src/kata');

describe("Kata", function () {
  it("change_this_name", function () {
   var result = analyse();
      expect(result).toBe(true);
  });
});
