#!/usr/bin/ruby

class InfSeq
	attr_reader :this,:next_m
	def initialize(a,l)
		@this = a
		@next_m = l
	end

	def go(step = 1)
		while step != 0
			@this = @next_m.call.this
			@next_m = @next_m.call.next_m
			step -= 1
		end
		return self
	end
end
def infseq(a,x = 1,l = lambda{|a,x,l| infseq(x+a,x,l)})
	return InfSeq.new(a,lambda {l.call(a,x,l)})
end

if __FILE__ == $0
    puts __FILE__
    puts $0
end
