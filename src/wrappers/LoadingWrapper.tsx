import { OrbitProgress } from "react-loading-indicators"
import React from "react"

export default function LoadingWrapper() {
    const loadingStyle: React.CSSProperties = {
        alignItems: 'center',
        justifyContent: 'center'
    }

    return (
        <section
            id="Loading-Screen"
            className="flex flex-col h-middle"
            style={loadingStyle}
        >
            <OrbitProgress variant="disc" color="0D093A" size="large"/>
        </section>
    )
}