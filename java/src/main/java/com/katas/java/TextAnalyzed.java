package com.katas.java;

import java.util.Set;

public final class TextAnalyzed {

  private long numberWords;
  private Set<String> topWords;

  public TextAnalyzed(long numberWords, Set<String> topWords) {
    this.numberWords = numberWords;
    this.topWords = topWords;
  }

  public long wordCount() {
    return numberWords;
  }

  public Set<String> topWords() {
    return topWords;
  }
}
