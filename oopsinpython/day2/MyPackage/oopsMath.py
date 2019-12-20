class Math:
    """
    in this math class icreated few mathematical functions
    those are isEven() and isOdd()
    """
    def prime(n):
        for i in range(2,n):
            if n%i==0:
                return True
        return False
        