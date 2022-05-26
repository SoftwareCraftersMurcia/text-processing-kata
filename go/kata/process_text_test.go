package kata_test

import (
	"SoftwareCraftersMurcia/text-processing-kata/go/kata"
	"github.com/stretchr/testify/assert"
	"testing"
)

func TestTextProcessor(t *testing.T) {
	t.Run("assert something", func(t *testing.T) {
		assert.NotNil(t, kata.ProcessText("some text"))
	})
}
